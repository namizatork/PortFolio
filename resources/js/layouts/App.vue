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
                <v-btn v-for="link in links" :key="link" flat class="my-3">
                    {{ link }}
                </v-btn>
                <v-flex xs12 class="py-3 grey darken-3 text-xs-center text-xs grey--text">
                    &copy;2019 <strong>PortFolio</strong>
                </v-flex>
            </v-layout>
        </v-footer>

    </v-app>
</template>

<script>
  export default {
    data: () => ({
      links: [
        'Profile',
        'PortFolio',
        'Blog',
        'Contact'
      ]
    })
  }
</script>