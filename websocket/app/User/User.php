<?php
/**
 * Created by PhpStorm.
 * User: bai
 * Date: 19-5-22
 * Time: 下午2:50
 */

namespace App\User;


use App\Test\Test;
use Predis\Client;

/**
 * Class User
 * @package App\User
 */
class User
{
   protected $predis;

   public function __construct($host,$port)
   {
       $this->predis = new Client([
           'scheme' => 'tcp',
           'host'   => $host,
           'port'   => $port
       ]);
   }

   public function get_all_user_count(){
       return $this->predis->hlen('web_user');
   }

   public function get_all_user_info(){
       return $this->predis->hget('web_user');
   }

   public function addUser($id){
       return $this->predis->hset('web_user','fb'.$id,$id);
   }

   public function deleteUser($id){
       return $this->predis->hdel('web_user','fb'.$id);
   }

}
