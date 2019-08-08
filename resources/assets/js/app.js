import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';
import Routes from './routes.js';
import InfiniteLoading from 'vue-infinite-loading';
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
    faLink,
    faCircle,
    faRssSquare,
    faCaretDown,
    faRss,
    faTwitter,
    faGit,
    faGithubSquare,
    faTwitterSquare,
    faGithub
);

dom.watch();

import App from './layouts/App';

//Vuetifyプラグインを使用する
Vue.use(Vuetify, {
    //colorのテーマを変更する
    theme: {
        dark: true,
        dark: '#191919',
        teal: '#009688'
    },
    iconfont: 'faSvg',
    icons: {
        'ratingEmpty': 'fas fa-circle',
        'ratingFull': 'fas fa-circle',
        'ratingHalf': 'fas fa-circle'
    }
});

//無限スクロール
Vue.use(InfiniteLoading);

const app = new Vue({
    el: '#app',
    router: Routes,
    iconfont: 'fa',
    render: h => h(App)
});

export default app;