<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- 引入 Element Plus-->
    <script src="https://unpkg.com/vue@3"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-plus/dist/index.css">
    <script src="https://unpkg.com/element-plus"></script>
    <!-- 引入 Element Plus-->

    <title>欧子-控制台</title>
</head>
<body>
<div id="app">
    <el-button>${ message }</el-button>
</div>
<script>
    const App = {
        delimiters:['${','}'],
        data() {
            return {
                message: "Hello Element Plus",
            };
        },
    };
    const app = Vue.createApp(App);
    app.use(ElementPlus);
    app.mount("#app");
</script>
</body>
</html>
