import Vue from 'vue';
import VueRouter from 'vue-router';

//ページコンポーネントをインポートする
import Index from './components/Index';
import Portfolio from './components/Portfolio';
import Blog from './components/Blog';
import Contact from './components/Contact';
import Login from './admin_components/Login';

//VueRouterプラグインを使用する
Vue.use(VueRouter);

//パスとコンポーネントのマッピングを行う
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Index',
            component: Index
        },
        {
            path: '/portfolio',
            name: 'Portfolio',
            component: Portfolio
        },
        {
            path: '/blog',
            name: 'Blog',
            component: Blog
        },
        {
            path: '/contact',
            name: 'Contact',
            component: Contact
        },
        {
            path: '/login',
            name: 'Login',
            component: Login
        },
    ]
});

//app.jsでインポートするためにVueRouterインスタンスをエクスポートする
export default router;