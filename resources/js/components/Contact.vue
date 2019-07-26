<template>
    <v-content class="p-0">

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <v-layout wrap>
                        <v-flex>
                            <v-card class="mx-auto" style="max-width: 600px;">
                                <v-window v-model="step">
                                    <v-window-item :value="1">
                                        <v-form ref="form" v-model="form">
                                            <v-card-title class="py-4 teal">
                                                <h4 class="m-0">Send Mail</h4>
                                            </v-card-title>
                                            <v-card-text>
                                                <div class="py-4">
                                                    <h5 class="text-sm grey--text">ご連絡はこちらからお願いします。<br>人材派遣紹介やSES企業のスカウトは返信致しません。</h5>
                                                </div>
                                                <v-text-field v-model="name" prepend-icon="far fa-user" :rules="[rules.required]" :error-messages="errors.name" solo color="teal" label="Name"></v-text-field>
                                                <v-text-field v-model="company" prepend-icon="far fa-building" :error-messages="errors.company" solo color="teal" label="Company"></v-text-field>
                                                <v-select v-model="requirement" prepend-icon="far fa-list-ol" :rules="[rules.required]" :error-messages="errors.requirement" :items="items" color="teal" color-text="white" solo label="Requirement"></v-select>
                                                <v-text-field v-model="email" prepend-icon="far fa-envelope" :rules="[rules.required]" :error-messages="errors.email" solo color="teal" label="Email"></v-text-field>
                                                <v-textarea v-model="text" prepend-icon="far fa-comment-alt-dots" :rules="[rules.required]" :error-messages="errors.text" auto-grow solo color="teal" rows="5" label="Text"></v-textarea>
                                            </v-card-text>
                                            <v-divider></v-divider>
                                            <v-card-actions class="justify-end">
                                                <v-btn flat @click="$refs.form.reset()">Clear</v-btn>
                                                <v-btn :disabled="!form" :loading="loading" @click="contactSend(); loader = 'loading'" class="white--text" color="teal" depressed>Send</v-btn>
                                            </v-card-actions>
                                        </v-form>
                                    </v-window-item>
                                    <v-window-item :value="2">
                                        <h2>OK</h2>
                                    </v-window-item>
                                </v-window>
                            </v-card>
                        </v-flex>
                    </v-layout>
                </div>
            </div>
        </v-container>

    </v-content>
</template>

<script>
  export default {
    data: () => ({
        name: undefined,
        company: undefined,
        requirement: undefined,
        email: undefined,
        text:  undefined,
        items: ['1. 個人制作の依頼', '2. スカウトの連絡', '3. 個人的な連絡'],
        form: false,
        step: 1,
        loader: null,
        loading: false,
        errors: {},
        rules: {
            required: v => !!v || 'This field is required'
        }
    }),
    methods: {
        contactSend() {
            const self = this;
            this.errors = {};
            const l = this.loader
            this[l] = !this[l]
            let params = {
                name: this.name,
                company: this.company,
                requirement: this.requirement,
                email: this.email,
                text: this.text
            };
            //axiosでPOST送信
            axios.post('/api/contact', params).then(res => {
                //送信完了すればステップを+1して完了に見せる
                self.step++;
                //ローディング
                this[l] = false
                this.loader = null
            })
            .catch(function(error) {
                //エラー処理
                var errors = {};
                for (var key in error.response.data.errors) {
                    errors[key] = error.response.data.errors[key];
                }
                self.errors = errors;
            });
        }
    }
}
</script>