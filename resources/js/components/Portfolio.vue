<template>
    <v-content class="p-0">
        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Blog</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">主に技術系のことや、活動について発信します。</h3>
                        <span></span>
                    </div>
                    <v-layout row wrap>
                        <v-flex md12>
                        <v-card color="grey">
                            <v-list three-line class="blog-list">
                            <template v-for="(item, index) in items">
                                <v-subheader v-if="item.header" :key="item.header">
                                {{ item.header }}
                                </v-subheader>
                                <v-divider v-else-if="item.divider" :key="index" :inset="item.inset"></v-divider>
                                <v-list-tile v-else :key="item.title">
                                    <v-list-tile-content>
                                        <v-list-tile-title v-html="item.title" class="mb-2 text-lg teal--text"></v-list-tile-title>
                                        <v-list-tile-sub-title v-html="item.subtitle" class="mb-3 text-sm"></v-list-tile-sub-title>
                                        <span class="grey--text text-xs"><v-icon small color="grey">fal fa-clock</v-icon> {{ item.date }}</span>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </template>
                            </v-list>
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
        data: () => ({
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
            },
            items: [
                { header: '最新記事' },
                {
                    title: 'Brunch this weekend?',
                    subtitle: "<span class='text--primary'>Ali Connors</span> &mdash; I'll be in your neighborhood doing errands this weekend. Do you want to hang out?",
                    date: "2019.06.01"
                },
                { divider: true, inset: true },
                {
                    title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>',
                    subtitle: "<span class='text--primary'>to Alex, Scott, Jennifer</span> &mdash; Wish I could come, but I'm out of town this weekend.",
                    date: "2019.06.01"
                },
                { divider: true, inset: true },
                {
                    title: 'Oui oui',
                    subtitle: "<span class='text--primary'>Sandra Adams</span> &mdash; Do you have Paris recommendations? Have you ever been?",
                    date: "2019.06.01"
                }
            ]
        })
    }
</script>