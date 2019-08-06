import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from './routes.js';
import InfiniteLoading from 'vue-infinite-loading';
import VueLocalStorage from 'vue-localstorage';
import { library, dom } from '@fortawesome/fontawesome-svg-core';
import {
    faBriefcase,
    faBirthdayCake,
    faMapMarkerAlt,
    faHeart,
    faLightbulb,
    faLockAlt,
    faClock,
    faUser,
    faPaperPlane,
    faBars,
    faLayerPlus,
    faPen,
    faLink
} from '@fortawesome/pro-light-svg-icons';
import {
    faCircle,
    faRssSquare,
    faCaretDown,
    faRss
} from '@fortawesome/pro-solid-svg-icons';
import {
    faTwitter,
    faGit,
    faGithubSquare,
    faTwitterSquare,
    faGithub
} from '@fortawesome/free-brands-svg-icons';

dom.watch()

library.add(
    faBriefcase,
    faBirthdayCake,
    faMapMarkerAlt,
    faHeart,
    faLightbulb,
    faLockAlt,
    faClock,
    faUser,
    faPaperPlane,
    faBars,
    faLayerPlus,
    faPen,
    faLink
);
library.add(
    faCircle,
    faRssSquare,
    faCaretDown,
    faRss
);
library.add(
    faTwitter,
    faGit,
    faGithubSquare,
    faTwitterSquare,
    faGithub
);

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

//無限スクロール
Vue.use(InfiniteLoading);
//ローカルストレージ
Vue.use(VueLocalStorage)

const app = new Vue({
    el: '#app',
    router: Routes,
    iconfont: 'fa',
    render: h => h(App)
});

export default app;