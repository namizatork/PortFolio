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
                                    <p class="text-md white-grey--text">{{ portfolio.text }}</p>
                                    </v-flex>
                                </div>
                                <v-img :src="portfolio.src" :lazy-src="portfolio.src" height="400"></v-img>
                                <v-card-text style="height: 50px; position: relative">
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
                                <v-flex class="p-4">
                                    <v-flex>
                                        <table class="card-table ui celled striped table">
                                            <tr>
                                                <th><v-icon color="teal" class="mr-2 fa-fw">fal fa-calendar</v-icon> 期間</th>
                                                <td>{{ portfolio.from }}</td>
                                            </tr>
                                            <tr>
                                                <th><v-icon color="teal" class="mr-2 fa-fw">fal fa-briefcase</v-icon> 種類</th>
                                                <td>{{ portfolio.genle.name }}</td>
                                            </tr>
                                            <tr>
                                                <th><v-icon color="teal" class="mr-2 fa-fw">fal fa-users</v-icon> 人数</th>
                                                <td>{{ portfolio.people }}人</td>
                                            </tr>
                                        </table>
                                    </v-flex>
                                    <v-flex>
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