<template>
    <v-content class="p-0">

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <v-layout wrap>
                        <v-flex>
                            <v-card class="mx-auto" style="max-width: 600px;">
                                <v-form ref="form" v-model="form">
                                    <v-card-title class="py-4 teal">
                                        <h4 class="m-0">Send Mail</h4>
                                    </v-card-title>
                                    <v-card-text>
                                        <v-window v-model="step">
                                            <v-window-item :value="1">
                                                <div class="py-4">
                                                    <h5 class="wrap-normal text-pre-line-wrap text-md grey--text">ご連絡はこちらからお願いします。<br>人材派遣紹介やSES企業のスカウトは返信致しません。</h5>
                                                </div>
                                                <v-text-field v-model="name" :counter="255" prepend-icon="far fa-user" :rules="nameRules" :error-messages="errors.name" solo color="teal" label="Name"></v-text-field>
                                                <v-text-field v-model="company" :counter="255" prepend-icon="far fa-building" :rules="companyRules" :error-messages="errors.company" solo color="teal" label="Company"></v-text-field>
                                                <v-select v-model="requirement" prepend-icon="far fa-list-ol" :rules="requirementRules" :error-messages="errors.requirement" :items="items" color="teal" color-text="white" solo label="Requirement"></v-select>
                                                <v-text-field v-model="email" prepend-icon="far fa-envelope" :rules="emailRules" :error-messages="errors.email" solo color="teal" label="Email"></v-text-field>
                                                <v-textarea v-model="text" prepend-icon="far fa-comment-alt-dots" :rules="textRules" :error-messages="errors.text" auto-grow solo color="teal" rows="5" label="Text"></v-textarea>
                                            </v-window-item>
                                            <v-window-item :value="2">
                                                <h5 class="pt-4 wrap-normal text-pre-line-wrap text-md white--text">ご連絡ありがとうございました。<br>2~3日以内に返信いたしますので、しばらくお待ちください。</h5>
                                                <div class="py-4">
                                                    <div class="text-center">
                                                        <v-avatar size="100" color="grey" class="mb-4"><v-icon large>fal fa-paper-plane</v-icon></v-avatar>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <router-link to="/">TOPページに戻る</router-link>
                                                </div>
                                            </v-window-item>
                                        </v-window>
                                    </v-card-text>
                                    <v-divider></v-divider>
                                    <v-card-actions class="justify-end">
                                        <v-btn :disabled="!form" :loading="loading" @click="contactSend(); loader = 'loading'" class="white--text" color="teal" depressed>Send</v-btn>
                                    </v-card-actions>
                                </v-form>
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
        name: '',
        nameRules: [
            v => !!v || 'Name is required',
            v => v.length <= 255 || 'The name may not be greater than 255 characters.'
        ],
        company: '',
        companyRules: [
            v => v.length <= 255 || 'The company may not be greater than 255 characters.'
        ],
        requirement: '',
        requirementRules: [
            v => !!v || 'Requirement is required',
            v => v.length <= 255 || 'The requirement may not be greater than 255 characters.'
        ],
        email: '',
        emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+/.test(v) || 'E-mail must be valid'
        ],
        text:  '',
        textRules: [
            v => !!v || 'Text is required'
        ],
        items: ['1. 個人制作の依頼', '2. スカウトの連絡', '3. 個人的な連絡'],
        form: false,
        step: 1,
        loader: null,
        loading: false,
        errors: {}
    }),
    methods: {
        contactSend() {
            const self = this;
            this.errors = {};
            this.loading = true;
            this.form = false;
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
                //ローディング終了
                this.loading = false;
            })
            .catch(function(error) {
                //ローディング終了
                self.loading = false;
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