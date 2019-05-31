<template>
    <div>
        <el-container>
            <el-header>
                <el-button type="success">SWOOLE</el-button>
            </el-header>
            <el-container>
                <el-aside width="200px" style="line-height: 20px" >
                    <p>你好1</p>
                    <p>你好2</p>
                    <p>你好3</p>
                </el-aside>
                <el-main style="line-height: 40px">
                    <el-row>
                        <el-col :span="1">
                            <div  style="text-align: left" class="grid-content bg-purple-dark">
                            你好
                            </div>
                        </el-col>
                    </el-row>
                </el-main>
            </el-container>
            <el-footer>哈哈</el-footer>
        </el-container>
        <!--<el-row>-->
            <!--<el-button>默认按钮</el-button>-->
            <!--<el-button type="primary">主要按钮</el-button>-->
            <!--<el-button type="success">成功按钮</el-button>-->
            <!--<el-button type="info">信息按钮</el-button>-->
            <!--<el-button type="warning">警告按钮</el-button>-->
            <!--<el-button type="danger">危险按钮</el-button>-->
        <!--</el-row>-->
        </div>
</template>
<script>
    import 'element-ui/lib/theme-chalk/index.css'
    export default {
        name: 'TestUrl',
        data () {
            return {
                msg: ''
            }
        }
    }
</script>
<style>
    .el-header, .el-footer {
        background-color: #B3C0D1;
        color: #333;
        text-align: center;
        line-height: 60px;
    }

    .el-aside {
        background-color: #D3DCE6;
        color: #333;
        text-align: center;
        line-height: 200px;
    }

    .el-main {
        background-color: #E9EEF3;
        color: #333;
        text-align: center;
        line-height: 160px;
    }

    body > .el-container {
        margin-bottom: 40px;
    }

    .el-container:nth-child(5) .el-aside,
    .el-container:nth-child(6) .el-aside {
        line-height: 260px;
    }

    .el-container:nth-child(7) .el-aside {
        line-height: 320px;
    }
    .el-row {
        margin-bottom: 20px;
    &:last-child {
         margin-bottom: 0;
     }
    }
    .el-col {
        border-radius: 4px;
    }
    .bg-purple-dark {
        background: #99a9bf;
    }
    .bg-purple {
        background: #d3dce6;
    }
    .bg-purple-light {
        background: #e5e9f2;
    }
    .grid-content {
        border-radius: 4px;
        min-height: 36px;
    }
    .row-bg {
        padding: 10px 0;
        background-color: #f9fafc;
    }
</style>
