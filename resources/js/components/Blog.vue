<template>
    <v-content class="p-0">

        <v-container fluid id="blog" class="main">
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
                    <v-layout wrap>
                        <v-flex md9 sm12>
                            <v-flex v-for="post in posts" :key="post.index" class="py-4 border-bottom">
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
                            <infinite-loading @infinite="infiniteHandler">
                                <div slot="spinner" class="m-5">
                                    <v-progress-circular indeterminate color="teal"></v-progress-circular>
                                </div>
                            </infinite-loading>
                        </v-flex>

                        <v-flex md3 sm12 class="pl-5">
                            <v-layout class="py-4 border-bottom">                                 
                                <v-flex class="skills">
                                    <h4 class="teal--text">CATEGORY</h4>
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
                            </v-layout>
                            <v-layout class="py-4 border-bottom">               
                                <v-flex class="skills">
                                    <h4 class="teal--text">SOCIAL CONTACT</h4>
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
                            </v-layout>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>

    </v-content>
</template>

<script>
    export default {
        data() {
            return {
                page: 1,
                posts: [],
                admins: [
                    ['Management', 'people_outline'],
                    ['Settings', 'settings']
                ],
                cruds: [
                    ['Create', 'add'],
                    ['Read', 'insert_drive_file'],
                    ['Update', 'update'],
                    ['Delete', 'delete']
                ]
            };
        },
        methods: {
            infiniteHandler($state) {
                axios.get('/api/post', {
                    params: {
                        page: this.page,
                        per_page: 1
                    },
                }).then(({ data }) => {
                    setTimeout(() => {
                        if (this.page < data.data.length) {
                            this.page += 1
                            this.posts.push(...data.data)
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