<template>
    <v-app dark>
        <v-toolbar app>
            <v-spacer></v-spacer>
            <v-toolbar-items class="hidden-sm-and-down align-items-center">
                <router-link flat class="grey--text lighten-1" to="/">Profile</router-link>
                <router-link flat class="grey--text lighten-1" to="/portfolio">PortFolio</router-link>
                <!-- <router-link flat class="grey--text lighten-1" to="/blog">Blog</router-link> -->
                <router-link flat class="grey--text lighten-1" to="/contact">Contact</router-link>
            </v-toolbar-items>

            <v-btn fab dark small color="teal" @click.stop="drawer = !drawer" class="mr-3 menu-btn">
                <v-icon class="fa-2x">fal fa-bars</v-icon>
            </v-btn>
        </v-toolbar>

        <v-navigation-drawer v-model="drawer" fixed="" temporary style="margin-top: 56px;">
            <v-list class="pt-4" dense>
                <v-list-tile v-for="item in items" :key="item.title" :to="item.url" class="py-2">
                    <v-list-tile-action>
                        <v-icon small color="grey">{{ item.icon }}</v-icon>
                    </v-list-tile-action>

                    <v-list-tile-content>
                        <v-list-tile-title class="text-lg white--text">{{ item.title }}</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>


        <v-content>
            <v-container fluid class="p-0">
                <router-view></router-view>
            </v-container>
        </v-content>

        <v-footer height="auto" class="elevation-6">
            <v-layout justify-center row wrap>
                <div class="p-3 d-inline-flex">
                    <v-flex class="px-3">
                        <a href="https://github.com/namizatork" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="grey">fab fa-github</v-icon> 
                    </a>
                    </v-flex>
                    <v-flex class="px-3">
                        <a href="https://twitter.com/namizatop" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="grey">fab fa-twitter</v-icon></a>
                    </v-flex>
                    <v-flex class="px-3">
                        <a href="https://qiita.com/namizatop" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="grey">fas fa-rss</v-icon></a>
                    </v-flex>
                </div>
                <v-flex xs12 class="py-3 grey darken-3 text-xs-center text-xs grey--text">
                    &copy;2019 <strong>PortFolio</strong>
                </v-flex>
            </v-layout>
        </v-footer>

    </v-app>
</template>

<script>
    export default {
        data () {
            return {
                drawer: null,
                items: [
                    { title: 'Profile', icon: 'fal fa-user', url: '/' },
                    { title: 'Portfolio', icon: 'fal fa-layer-plus', url: '/portfolio' },
                    { title: 'Contact', icon: 'fal fa-paper-plane', url: '/contact' }
                ]
            }
        }
    }
</script>