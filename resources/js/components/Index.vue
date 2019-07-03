<template>
    <v-content class="p-0">

        <v-container fluid class="main elevation-5">
            <div class="container-outer">
                <div class="container-inner">
                    <v-flex class="main-text">
                        <h1 class="display-3">Welcome to the <span class="teal--text">PortFolio</span></h1>
                        <span class="subheading">Lorem ipsum dolor sit amet, pri veniam forensibus id. Vis maluisset molestiae id, ad semper lobortis cum. At impetus detraxit incorrupte usu, repudiare assueverit ex eum, ne nam essent vocent admodum.</span>
                        <v-divider class="my-3"></v-divider>
                        <div class="title mb-3"></div>
                        <v-btn class="mx-0" color="teal" large>実績をみる</v-btn>
                    </v-flex>
                </div>
            </div>
        </v-container>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Profile</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">プロフィールと簡単なご挨拶</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex md5 sm12 class="px-4">
                            <v-card class="profile-card hover" elevation="5">
                                <v-img class="white--text" height="150px" gradient="to top left, rgba(100,115,201,.33), rgba(25,32,72,.7)" src="/images/profile-background-image.jpg"></v-img>
                                <v-avatar size="130" class="center-avatar">
                                    <v-img src="/images/profile-image.jpg"></v-img>
                                </v-avatar>
                                <v-card-title column class="justify-center">
                                    <h4 class="text-xl">Namizato Tatsuya</h4>
                                </v-card-title>
                                <v-card-actions>
                                    <table class="card-table ui celled striped table">
                                        <tr>
                                            <th><v-icon class="mr-2 fa-fw grey--text">fal fa-briefcase</v-icon> Work</th>
                                            <td>サーバサイドエンジニア</td>
                                        </tr>
                                        <tr>
                                            <th><v-icon class="mr-2 fa-fw grey--text">fal fa-birthday-cake</v-icon> Age</th>
                                            <td>1994/05/19</td>
                                        </tr>
                                        <tr>
                                            <th><v-icon class="mr-2 fa-fw grey--text">fal fa-map-marker-alt</v-icon> Location</th>
                                            <td>大阪</td>
                                        </tr>
                                        <tr>
                                            <th><v-icon class="mr-2 fa-fw grey--text">fal fa-heart</v-icon> Hobby</th>
                                            <td>バスケ　ボルダリング</td>
                                        </tr>
                                    </table>
                                </v-card-actions>
                            </v-card>
                        </v-flex>

                        <v-flex md7 sm12 class="px-4">
                            <v-window class="introduction-card elevation-5" vertical>
                                <v-window-item>
                                    <v-card flat>
                                        <v-card-text>
                                            <v-layout align-center mb-3>
                                                <v-avatar color="grey" class="mr-3"><v-icon>fal fa-lightbulb</v-icon></v-avatar>
                                                <strong class="text-lg">Hi! My name is Tatsuya Namizato</strong>
                                                <v-spacer></v-spacer>
                                            </v-layout>
                                            <p class="white-grey--text">
                                                初めまして、沖縄出身の並里です。<br>
                                                プログラミング未経験でIT業界に飛び込んでから<br>
                                                毎日死にものぐるいでプログラミングしてます。<br>
                                                <br>
                                                前職はSIer系の受託開発でフロントエンド/バックエンド/<br>
                                                Linux環境での構築等のWEB開発を一通り経験しました。<br>
                                                現職ではサーバーサイドで受託/自社サービス開発をしています。<br>
                                                <br>
                                                最近の休みはスタバか自宅で勉強しているか勉強会に参加。<br>
                                                たまにLTなんかをやったりで日々成長してる（つもり）<br>
                                                WEBサービスを作るのが好きで個人でもWEBサービス開発を<br>
                                                仲間を集めて開発してたりします。<br>
                                                <br>
                                                PS.東京進出を考えているので、互いの条件がマッチする<br>
                                                企業様がいれば転職も視野に入れ考えております！
                                            </p>
                                            <div class="py-1 text-right">
                                                <router-link to="/contact">興味があればこちらからご連絡下さい。</router-link>
                                            </div>
                                        </v-card-text>
                                    </v-card>
                                </v-window-item>
                            </v-window>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Career History</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">エンジニア/プログラマとしての経歴です</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex md12 class="px-4">
                            <v-timeline v-bind:class="dense">
                                <v-timeline-item color="teal" large>
                                    <template v-slot:opposite>
                                        <span>2017.04</span>
                                    </template>
                                    <v-card class="elevation-2" elevation="5">
                                        <v-card-title class="headline">沖縄のIT会社に新卒入社</v-card-title>
                                        <v-card-text class="white-grey--text">
                                            商業科卒なので、パソコンを使う仕事がしたい。<br>
                                            同時に物作り好きなのでIT系が良いのではと思い、<br>
                                            沖縄の自社/受託開発を行なっている会社に就職<br>
                                            プログラム経験0で入社して、必死に勉強する。<br>
                                            いつの間にか同期の中で一番良い評価貰って、<br>
                                            同年の7月に開発業務をしている大阪に転勤。
                                        </v-card-text>
                                    </v-card>
                                </v-timeline-item>
                                <v-timeline-item color="teal" large>
                                    <template v-slot:opposite>
                                        <span>2017.07</span>
                                    </template>
                                    <v-card class="elevation-2" elevation="5">
                                        <v-card-title class="headline">大阪で実際の開発業務</v-card-title>
                                        <v-card-text class="white-grey--text">
                                            大阪に来て、すぐに求人サイトを作る事になり、<br>
                                            WEBのことをよく分からないままスタート<br>
                                            会社にWEBエンジニアが居らず、独学でWEBを勉強<br>
                                            実際に案件をこなしながら<br>
                                            HTML/CSS/JS/PHP/Linuxなどを一通り覚える<br>
                                            2年目になる頃には一人で営業から開発まで行う。
                                        </v-card-text>
                                    </v-card>
                                </v-timeline-item>
                                <v-timeline-item color="teal" large>
                                    <template v-slot:opposite>
                                        <span>2018.12</span>
                                    </template>
                                    <v-card class="elevation-2" elevation="5">
                                        <v-card-title class="headline">1社目を退職</v-card-title>
                                        <v-card-text class="white-grey--text">
                                            この辺りでそれなりの案件を経験する。<br>
                                            しかし、チーム開発体制が整っておらず、<br>
                                            この会社に居てもこれ以上の成長は見込めないと<br>
                                            感じて1年半務めた会社を退職。<br>
                                            退職する前に現職に内定を貰っていたので<br>
                                            翌年の1月に制作会社の現職に入社。<br>
                                        </v-card-text>
                                    </v-card>
                                </v-timeline-item>
                                <v-timeline-item color="teal" large>
                                    <template v-slot:opposite>
                                        <span>2019.06</span>
                                    </template>
                                    <v-card class="elevation-2" elevation="5">
                                        <v-card-title class="headline">現職に入社して勉強不足を実感</v-card-title>
                                        <v-card-text class="white-grey--text">
                                            (ポートフォリオ作成現在の年月)<br>
                                            現職ではフロントエンド開発は行わず、<br>
                                            サーバーサイドの受託/自社開発に注力。<br>
                                            現職に入社してから本格的に勉強不足を痛感<br>
                                            それから休日は勉強したり、様々な勉強会にも参加<br>
                                            自分でもコミュニティを作りたいと思い、<br>
                                            Laravel勉強会を開催しました。
                                        </v-card-text>
                                    </v-card>
                                </v-timeline-item>
                            </v-timeline>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Skills</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">今まで使用してきた言語やツールのスキルレベルです</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex md4 sm12 class="skills px-4">
                            <h4 class="text-lg teal--text">FRONT END</h4>
                            <table class="mt-2 ml-3 skills-table ui celled striped table">
                                <tr>
                                    <th>HTML</th>
                                    <td><v-rating v-model="rating.html" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>CSS</th>
                                    <td><v-rating v-model="rating.css" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Bootstrap</th>
                                    <td><v-rating v-model="rating.bootstrap" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>JavaScript</th>
                                    <td><v-rating v-model="rating.javascript" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Vue.js</th>
                                    <td><v-rating v-model="rating.vue" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                <th>Vuetify</th>
                                    <td><v-rating v-model="rating.vuetify" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                            </table>
                        </v-flex>

                        <v-flex md4 sm12 class="skills px-4">
                            <h4 class="text-lg teal--text">BACK END</h4>
                            <table class="mt-2 ml-3 skills-table ui celled striped table">
                                <tr>
                                    <th>PHP</th>
                                    <td><v-rating v-model="rating.php" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Laravel</th>
                                    <td><v-rating v-model="rating.laravel" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Symfony</th>
                                    <td><v-rating v-model="rating.symfony" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>CakePHP</th>
                                    <td><v-rating v-model="rating.cakephp" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>MySQL</th>
                                    <td><v-rating v-model="rating.mysql" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>TwitterAPI</th>
                                    <td><v-rating v-model="rating.twitterapi" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                            </table>
                        </v-flex>

                        <v-flex md4 sm12 class="skills px-4">
                            <h4 class="text-lg teal--text">OTHER/TOOL</h4>
                            <table class="mt-2 ml-3 skills-table ui celled striped table">
                                <tr>
                                    <th>Linux</th>
                                    <td><v-rating v-model="rating.linux" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Windows</th>
                                    <td><v-rating v-model="rating.windows" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Mac</th>
                                    <td><v-rating v-model="rating.mac" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Vagrant</th>
                                    <td><v-rating v-model="rating.vagrant" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                               <tr>
                                    <th>Photoshop</th>
                                    <td><v-rating v-model="rating.photoshop" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                                <tr>
                                    <th>Git Hub</th>
                                    <td><v-rating v-model="rating.github" length="6" color="teal" background-color="black-grey" small readonly></v-rating></td>
                                </tr>
                            </table>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">PorfFolio</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">今まで開発/制作してきた成果物です</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex v-for="portfolio in portfolios" :key="portfolio.id" md3 xs6 class="p-2">
                            <v-card to="/portfolio">
                                <v-img :src="portfolio.src" :lazy-src="portfolio.src" aspect-ratio="1" gradient="to top right, rgba(20,20,20,.33), rgba(73,73,73,.7)" height="180" class="portfolio-card-image">
                                    <template v-slot:placeholder>
                                        <v-layout fill-height align-center justify-center ma-0>
                                        <v-progress-circular indeterminate color="grey lighten-5"></v-progress-circular>
                                        </v-layout>
                                    </template>
                                    <v-container fill-height fluid pa-2>
                                    <v-layout fill-height>
                                        <v-flex xs12 align-end flexbox>
                                        <span class="headline white--text" v-text="portfolio.name"></span>
                                        </v-flex>
                                    </v-layout>
                                    </v-container>
                                </v-img>
                                <v-card-actions>
                                    <v-spacer></v-spacer>
                                     <v-chip label>{{ portfolio.genle.name }}</v-chip>
                                </v-card-actions>
                            </v-card>
                        </v-flex>
                        <div class="mt-5 w-100 text-right">
                            <router-link to="/blog" class="text-md">もっと見る</router-link>
                        </div>
                    </v-layout>
                </div>
            </div>
        </v-container>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Blog</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">主に技術系のことや活動について発信します</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex v-for="post in posts" :key="post.index" md12 sm12 class="py-4 border-bottom">
                            <v-flex class="d-inline-flex">                                                
                                <v-avatar color="grey darken-2" class="mr-3"><v-icon>fal fa-pen</v-icon></v-avatar>
                                <div>
                                    <router-link to="/blog" :key="post.index" class="text-lg white--text">{{ post.title }}</router-link>
                                    <div class="text-xs">
                                        <span class="teal--text mr-2">{{ post.category.name }}</span>
                                        <span :key="post.index" class="grey--text text--darken-2"><v-icon small class="grey--text text--darken-2 ">fal fa-clock</v-icon> {{ post.created_at }}</span>
                                    </div>
                                </div>
                            </v-flex>
                            <p :key="post.index" class="my-4 grey--text">{{ post.text }}</p>
                            <div>
                                <v-flex>
                                    <v-chip v-for="tag in post.tags" :key="tag.index" outline small class="grey darken-1">{{ tag.name }}</v-chip>
                                </v-flex>
                            </div>
                        </v-flex>
                        <div class="mt-5 w-100 text-right">
                            <router-link to="/blog" class="text-md">もっと見る</router-link>
                        </div>
                    </v-layout>
                </div>
            </div>
        </v-container>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Contact</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">個人宛に連絡があればこちらからお願いします</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex md4 mx12 class="skills px-4">
                            <h4 class="text-lg teal--text">SOCIAL CONTACT</h4>
                            <v-flex class="mt-4 ml-3">
                                <v-flex class="mb-4">
                                    <a href="https://github.com/namizatork" target="_blank" rel="noopener noreferrer" class="white-grey--text"><v-icon color="white-grey" class="mr-2">fab fa-github</v-icon> Git Hub</a>
                                </v-flex>
                                <v-flex class="mb-4">
                                    <a href="https://gitlab.com/namizato?nav_source=navbar" target="_blank" rel="noopener noreferrer" class="white-grey--text"><v-icon color="white-grey" class="mr-2">fab fa-gitlab</v-icon> Git Lab</a>
                                </v-flex>
                                <v-flex class="mb-4">
                                    <a href="https://twitter.com/namizatop" target="_blank" rel="noopener noreferrer" class="white-grey--text"><v-icon color="white-grey" class="mr-2">fab fa-twitter</v-icon> Twitter</a>
                                </v-flex>
                                <v-flex class="mb-4">
                                    <a href="https://qiita.com/namizatop" target="_blank" rel="noopener noreferrer" class="white-grey--text"><v-icon color="white-grey" class="mr-2">fas fa-rss</v-icon> Qiita</a>
                                </v-flex>
                            </v-flex>
                        </v-flex>

                        <v-flex md8 mx12 class="skills px-4">
                            <h4 class="text-lg teal--text">MESSAGE</h4>
                            <v-flex class="mt-4 ml-3">
                                <v-card class="message-card">
                                    <v-card-title class="message-head justify-space-between">
                                        <v-flex>
                                            <h5 class="title font-weight-bold">Namizato Portfolio</h5>
                                            <h6 class="text-xs">ポートフォリオからメッセージ</h6>
                                            <span class="text-xs grey--text">宛先: namizato</span>
                                        </v-flex>
                                        <v-flex class="text-right">
                                            <span class="grey--text text-xs"><v-icon small color="grey">fal fa-clock</v-icon> 2019.06.01</span>
                                            <v-list-tile-avatar color="grey darken-3" class="message-profile-image mt-2">
                                                <v-img class="elevation-6" src="/images/profile-image.jpg"></v-img>
                                            </v-list-tile-avatar>
                                        </v-flex>
                                    </v-card-title>
                                    <v-card-text class="white-grey--text line-height">
                                        WEB制作/システム構築/その他企業からのオファーも個人で<br>
                                        引き受けておりますので、お問い合わせフォームにお進みください。<br>
                                        ※企業様からの連絡は人材派遣業の紹介などに返信は致しません。<br>
                                    </v-card-text>
                                    <v-card-actions class="justify-end">
                                        <v-list-tile>
                                            <v-btn to="/contact" class="teal white--text">
                                                <v-icon left>fal fa-paper-plane</v-icon> 問い合わせフォームに進む
                                            </v-btn>
                                        </v-list-tile>
                                        </v-card-actions>
                                    </v-card>
                            </v-flex>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>

        <!--
        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Cheer on Twitter</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">ハッシュタグ<router-link to="/recruit">「#namizato」</router-link>で呟いて応援メッセージを呟くとここに表示されるよ。</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex md4 class="px-3" v-for="n in 3" :key="n">
                            <v-card to="/recruit" elevation="5" class="p-3 black--text hover">
                                <v-card-title primary-title class="p-2">
                                    <div class="d-inline-flex">
                                        <v-avatar>
                                            <v-img src="https://cdn.vuetifyjs.com/images/john.jpg"></v-img>
                                        </v-avatar>
                                        <div class="ml-2">
                                            <p class="mb-0 text-md white--text font-weight-bold">username</p>
                                            <router-link class="text-xs white-grey--text" to="/profile">@screen_name</router-link>
                                        </div>
                                    </div>
                                </v-card-title>
                                <v-card-actions class="d-block p-2">
                                    <p class="white-grey--text">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                                    <router-link to="/profile">#namizato</router-link>
                                    <p class="text-right text-xs grey--text"><v-icon class="mr-2 text-xs grey--text">fal fa-clock</v-icon>2019.06.02</p>
                                </v-card-actions>
                            </v-card>
                        </v-flex>
                    </v-layout>
                    <div class="container-more text-md-right">
                        <router-link to="/profile" class="round teal black--text">Twitterで#ハッシュタグを呟いて応援する</router-link>
                    </div>
                </div>
            </div>
        </v-container>
        -->

    </v-content>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                dense: {},
                posts: {},
                portfolios: {},
                rating: {
                    html: 6,
                    css: 6,
                    bootstrap: 6,
                    javascript: 5,
                    vue: 4,
                    vuetify: 5,
                    php: 5,
                    laravel: 5,
                    symfony: 4,
                    cakephp: 5,
                    mysql: 5,
                    twitterapi: 6,
                    linux: 5,
                    windows: 6,
                    mac: 6,
                    vagrant: 5,
                    photoshop: 4,
                    github: 3
                }
            }
        },
        methods: {
            fetchPosts: function() {
                axios.get('/api/post').then((res)=>{
                    this.posts = res.data
                })
            },
            fetchPortfolio: function() {
                axios.get('/api/portfolio').then((res)=>{
                    this.portfolios = res.data
                })
            },
            handleResize: function() {
                if (window.innerWidth <= 900) {
                    this.dense = 'v-timeline--dense'
                } else {
                    this.dense = ''
                }
            }
        },
        created() {
            window.addEventListener('resize', this.handleResize)
            this.handleResize(),
            this.fetchPosts(),
            this.fetchPortfolio()
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize)
        }
    }
</script>