import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from './routes.js';
import mavonEditor from 'mavon-editor'
import 'mavon-editor/dist/css/index.css'
import '@fortawesome/fontawesome-pro/css/all.css';

import App from './layouts/App';

//Vuetifyプラグインを使用する
Vue.use(Vuetify, {
    //colorのテーマを変更する
    theme: {
        dark: true,
        dark: '#191919',
        teal: '#009688'
    },
    iconfont: 'fa',
    icons: {
        'ratingEmpty': 'fas fa-circle',
        'ratingFull': 'fas fa-circle',
        'ratingHalf': 'fas fa-circle'
    }
});

Vue.use(mavonEditor);

const app = new Vue({
    el: '#app',
    router: Routes,
    iconfont: 'fa',
    render: h => h(App)
});

export default app;