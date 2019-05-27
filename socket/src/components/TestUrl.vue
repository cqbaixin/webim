<template>
    <div>
    <el-container>
        <el-header>
        </el-header>
        <el-aside>：侧边栏容器。

        </el-aside>
        <el-main>
            ：主要区域容器。
        </el-main>
        <el-footer>：底栏容器。
        </el-footer>
    </el-container>
        <el-row>
            <el-button>默认按钮</el-button>
            <el-button type="primary">主要按钮</el-button>
            <el-button type="success">成功按钮</el-button>
            <el-button type="info">信息按钮</el-button>
            <el-button type="warning">警告按钮</el-button>
            <el-button type="danger">危险按钮</el-button>
        </el-row>
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
</style>
