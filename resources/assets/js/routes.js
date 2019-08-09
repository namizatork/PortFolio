import Vue from 'vue';
import VueRouter from 'vue-router';

//ページコンポーネントをインポートする
import Notfound from './components/Notfound'
import Index from './components/Index';
import Portfolio from './components/Portfolio';
import Blog from './components/Blog';
import Test from './components/Test';
import Contact from './components/Contact';
import Login from './admin_components/Login';

//VueRouterプラグインを使用する
Vue.use(VueRouter);

//パスとコンポーネントのマッピングを行う
const router = new VueRouter({
    //ページ遷移した時のスクロール位置はトップに設定
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return { x: 0, y: 0 }
        }
    },
    mode: 'history',
    routes: [
        {
            path: '*',
            component: Notfound
        },
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
            path: '/test',
            name: 'Test',
            component: Test
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