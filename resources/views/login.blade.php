<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- 引入 Element Plus-->
    <script src="https://unpkg.com/vue@3"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-plus/dist/index.css">
    <script src="https://unpkg.com/element-plus"></script>
    <!-- 引入 Element Plus-->
    {{--    使用vite引入css/js--}}
    @vite(['resources/scss/app.css', 'resources/js/app.js'])

    <title>欧子-控制台</title>
</head>
<body>
<div id="app">
        <div class="login-container">
            <el-form ref="loginForm" :model="loginForm" :rules="loginRules" class="login-form" auto-complete="on" label-position="left">

                <div class="title-container">
                    <h3 class="title">Login Form</h3>
                </div>

                <el-form-item prop="username">
        <span class="svg-container">
          <svg-icon icon-class="user" />
        </span>
                    <el-input
                        ref="username"
                        v-model="loginForm.username"
                        placeholder="Username"
                        name="username"
                        type="text"
                        tabindex="1"
                        auto-complete="on"
                    />
                </el-form-item>

                <el-form-item prop="password">
        <span class="svg-container">
          <svg-icon icon-class="password" />
        </span>
                    <el-input
                        :key="passwordType"
                        ref="password"
                        v-model="loginForm.password"
                        :type="passwordType"
                        placeholder="Password"
                        name="password"
                        tabindex="2"
                        auto-complete="on"
                        @keyup.enter.native="handleLogin"
                    />
                    <span class="show-pwd" @click="showPwd">
          <svg-icon :icon-class="passwordType === 'password' ? 'eye' : 'eye-open'" />
        </span>
                </el-form-item>

                <el-button :loading="loading" type="primary" style="width:100%;margin-bottom:30px;" @click.native.prevent="handleLogin">Login</el-button>

                <div class="tips">
                    <span style="margin-right:20px;">username: admin</span>
                    <span> password: any</span>
                </div>

            </el-form>
        </div>
</div>
</body>
</html>


