<template>
    <v-content class="p-0">

        <v-container v-for="portfolio in portfolios" :key="portfolio.id" fluid :id="`portfolio-${portfolio.id}`">
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Portfolio No.{{ portfolio.id }}</h2>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex md12 sm12>
                            <v-card dark elevation="5" class="portfolio-card">
                                <v-card-title class="teal">
                                    <v-avatar color="white" class="mr-3">
                                        <v-icon color="teal">fal fa-pen</v-icon>
                                    </v-avatar>
                                    <h4 class="m-0">Portfolio No.{{ portfolio.id }}</h4>
                                </v-card-title>
                                <div class="p-4">
                                    <v-flex class="py-4 text-center">
                                        <h4 class="portfolio-card-title font-weight-bold">{{ portfolio.name }}</h4>
                                    </v-flex>
                                    <v-flex>
                                    <p class="portfolio-card-text text-md white-grey--text">{{ portfolio.text }}</p>
                                    </v-flex>
                                </div>
                                <v-img v-if="portfolio.private_flg === 0" :src="portfolio.src" :lazy-src="portfolio.src" height="400"></v-img>
                                <v-layout v-else align-center justify-center column class="no-image">
                                    <v-icon color="teal">fal fa-lock-alt</v-icon>
                                    <p class="py-2 teal--text">Sorry Private site.</p>
                                </v-layout>
                                <v-card-text style="height: 25px; position: relative">
                                    <v-btn v-if="portfolio.private_flg === 0 && portfolio.url !== null" :href="portfolio.url" target="_blank" color="teal" absolute top right fab large class="portfolio-card-link">
                                        <v-icon medium color="white" class="d-flex">fal fa-link</v-icon>
                                    </v-btn>
                                    <v-btn v-else color="grey" absolute top right fab large class="portfolio-card-link" disabled>
                                        <v-icon medium color="white">fal fa-link</v-icon>
                                    </v-btn>
                                    <v-btn v-if="portfolio.private_flg === 0 && portfolio.git_url !== null" :href="portfolio.git_url" target="_blank" color="teal" absolute top right fab large class="portfolio-card-git">
                                         <v-icon medium color="white" class="d-flex">fab fa-github</v-icon>
                                    </v-btn>
                                    <v-btn v-else color="grey" absolute top right fab large class="portfolio-card-git" disabled>
                                         <v-icon medium color="white">fab fa-github</v-icon>
                                    </v-btn>
                                </v-card-text>
                                <v-flex>
                                    <v-flex class="p-4">
                                        <v-layout align-center justify-start class="py-3 white-grey--text">
                                            <div class="pr-5">
                                                <h5><v-icon class="mr-2 fa-fw white-grey--text">fal fa-calendar</v-icon> 期間</h5>
                                            </div>
                                            <div>
                                                <h6>{{ portfolio.from | moment }} ~ {{ portfolio.until | moment }}</h6>    
                                            </div>
                                        </v-layout>
                                        <v-layout align-center justify-start class="py-3 white-grey--text">
                                            <div class="pr-5">
                                                <h5><v-icon class="mr-2 fa-fw white-grey--text">fal fa-briefcase</v-icon> 種類</h5>
                                            </div>
                                            <div>
                                                <h6>{{ portfolio.genle.name }}</h6>
                                            </div>
                                        </v-layout>
                                        <v-layout align-center justify-start class="py-3 white-grey--text">
                                            <div class="pr-5">
                                                <h5><v-icon class="mr-2 fa-fw white-grey--text">fal fa-users</v-icon> 人数</h5>
                                            </div>
                                            <div>
                                                <h6>{{ portfolio.people }}人</h6>
                                            </div>
                                        </v-layout>
                                    </v-flex>
                                    <v-flex align-center justify-center class="py-2 px-3 portfolio-card-footer border-top">
                                        <v-chip v-for="tag in portfolio.tags" :key="tag.index" outline class="grey darken-1">{{ tag.name }}</v-chip>
                                    </v-flex>
                                </v-flex>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>
        <infinite-loading @infinite="infiniteHandler">
            <div slot="spinner" class="m-5">
                <v-progress-circular indeterminate color="teal"></v-progress-circular>
            </div>
        </infinite-loading>

    </v-content>
</template>

<script>
    import moment from 'moment';
    export default {
        filters: {
            moment: function (date) {
                return moment(date).format('YYYY/MM/DD');
            }
        },
        data() {
            return {
                page: 1,
                portfolios: []
            };
        },
        methods: {
            infiniteHandler($state) {
                axios.get('/api/portfolio', {
                    params: {
                        page: this.page,
                        per_page: 1
                    },
                }).then(({ data }) => {
                    setTimeout(() => {
                        if (this.page < data.data.length) {
                            this.page += 1
                            this.portfolios.push(...data.data)
                            $state.loaded()
                        } else {
                            $state.complete()
                        }
                    }, 1000)
                }).catch((err) => {
                    $state.complete()
                })
            }
        }
    };
</script>