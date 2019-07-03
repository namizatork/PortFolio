<template>
    <v-content class="p-0">

        <v-container v-for="portfolio in portfolios" :key="portfolio.id" fluid>
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
                                <v-img v-if="portfolio.private_flg == 0" :src="portfolio.src" :lazy-src="portfolio.src" height="400"></v-img>
                                <v-layout v-else align-center justify-center column class="no-image">
                                    <v-icon large color="teal">fal fa-lock-alt</v-icon>
                                    <p class="py-2 teal--text">Sorry Private site.</p>
                                </v-layout>
                                <v-card-text style="height: 25px; position: relative">
                                    <v-btn v-if="portfolio.private_flg == 0" color="teal" absolute top right fab large class="portfolio-card-link">
                                        <v-icon medium color="white">fal fa-external-link</v-icon>
                                    </v-btn>
                                    <v-btn v-else color="grey" absolute top right fab large class="portfolio-card-link" disabled>
                                        <v-icon medium color="white">fal fa-external-link</v-icon>
                                    </v-btn>
                                    <v-btn v-if="portfolio.git_url != null" color="teal" absolute top right fab large class="portfolio-card-git">
                                         <v-icon medium color="white">fab fa-github</v-icon>
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
                                                <h6>{{ portfolio.from }}</h6>    
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

    </v-content>
</template>

<script>
    import axios from 'axios';
    export default {
        data() {
            return {
                portfolios: {},
                isUpdating: false
            }
        },
        watch: {
            isUpdating (val) {
                if (val) {
                    setTimeout(() => (this.isUpdating = false), 3000)
                }
            }
        },
        methods: {
            fetchPortfolio: function() {
                axios.get('/api/portfolio').then((res)=>{
                    this.portfolios = res.data
                })
            },
            remove (item) {
                const index = this.friends.indexOf(item.name)
                if (index >= 0) this.friends.splice(index, 1)
            }
        },
        created() {
            this.fetchPortfolio()
        },
        destroyed() {
            window.removeEventListener('resize', this.handleResize)
        }
    }
</script>