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
        </v-toolbar>

        <v-content>
            <v-container fluid class="p-0">
                <router-view></router-view>
            </v-container>
        </v-content>

        <v-footer height="auto" class="elevation-6">
            <v-layout justify-center row wrap>
                <div class="p-3 d-inline-flex">
                    <v-flex class="px-3">
                        <a href="https://github.com/namizatork" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="white-grey">fab fa-github</v-icon> 
                    </a>
                    </v-flex>
                    <v-flex class="px-3">
                        <a href="https://gitlab.com/namizato?nav_source=navbar" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="white-grey">fab fa-gitlab</v-icon></a>
                    </v-flex>
                    <v-flex class="px-3">
                        <a href="https://twitter.com/namizatop" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="white-grey">fab fa-twitter</v-icon></a>
                    </v-flex>
                    <v-flex class="px-3">
                        <a href="https://qiita.com/namizatop" target="_blank" rel="noopener noreferrer" class="grey--text"><v-icon color="white-grey">fas fa-rss</v-icon></a>
                    </v-flex>
                </div>
                <v-flex xs12 class="py-3 grey darken-3 text-xs-center text-xs grey--text">
                    &copy;2019 <strong>PortFolio</strong>
                </v-flex>
            </v-layout>
        </v-footer>

    </v-app>
</template>