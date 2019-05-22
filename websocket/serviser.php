<?php
/**
 * Created by PhpStorm.
 * User: bai
 * Date: 19-5-22
 * Time: 上午11:43
 */
require_once 'vendor/autoload.php';

class WebsocketTest {
    public $server;
    public function __construct() {
        $user = new \App\User\User();
        $this->server = new Swoole\WebSocket\Server("0.0.0.0", 9501);
        $this->server->on('open', function (swoole_websocket_server $server, $request) use ($user) {
            echo "server: handshake success with fd{$request->fd}\n";
            $user->addUser($request->fd);
        });
        $this->server->on('message', function (Swoole\WebSocket\Server $server, $frame) {
            echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
            $server->push($frame->fd, "this is server");
        });
        $this->server->on('close', function ($ser, $fd) use ($user) {
            echo "client {$fd} closed\n";
            $user->deleteUser($fd);
        });
        $this->server->on('request', function ($request, $response) {
            // 接收http请求从get获取message参数的值，给用户推送
            // $this->server->connections 遍历所有websocket连接用户的fd，给所有用户推送
            foreach ($this->server->connections as $fd) {
                // 需要先判断是否是正确的websocket连接，否则有可能会push失败
                if ($this->server->isEstablished($fd)) {
                    $this->server->push($fd, $request->get['message']);
                }
            }
        });
        $this->server->start();
    }
}