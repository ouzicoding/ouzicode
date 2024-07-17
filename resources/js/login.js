import { validUsername } from '../utils/validate'
import SvgIcon from '../components/SvgIcon/index.vue'

const App = {
    name: 'Login',
    delimiters:['${','}'],
    data() {
        const validateUsername = (rule, value, callback) => {
            if (!validUsername(value)) {
                callback(new Error('用户名不正确'))
            } else {
                callback()
            }
        }
        const validatePassword = (rule, value, callback) => {
            if (value.length < 8) {
                callback(new Error('密码不能少于8位'))
            } else {
                callback()
            }
        }
        return {
            loginForm: {
                username: 'admin',
                password: ''
            },
            loginRules: {
                username: [{ required: true, trigger: 'blur', validator: validateUsername }],
                password: [{ required: true, trigger: 'blur', validator: validatePassword }]
            },
            loading: false,
            passwordType: 'password',
            redirect: undefined
        }
    },

    methods: {
        showPwd() {
            if (this.passwordType === 'password') {
                this.passwordType = ''
            } else {
                this.passwordType = 'password'
            }
            this.$nextTick(() => {
                this.$refs.password.focus()
            })
        },
        handleLogin() {
            this.$refs.loginForm.validate(valid => {
                if (valid) {
                    this.loading = true
                    this.$store.dispatch('user/login', this.loginForm).then(() => {
                        this.$router.push({ path: this.redirect || '/' })
                        this.loading = false
                    }).catch(() => {
                        this.loading = false
                    })
                } else {
                    console.log('error submit!!')
                    return false
                }
            })
        }
    }
}
const app = Vue.createApp(App);
app.use(ElementPlus);
// 注册组件
app.component(
    // 注册的名字
    'svg-icon',
    // 组件的实现
    SvgIcon
)
app.mount("#app");
