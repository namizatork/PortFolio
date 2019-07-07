<template>
    <v-content class="p-0">

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <div class="container-title">
                        <h2 class="display-2 font-weight-bold">Contact</h2>
                        <h3 class="text-lg font-weight-light grey--text text--darken-2">個人宛に連絡があればこちらからお願いします</h3>
                        <span></span>
                    </div>
                    <v-layout wrap>
                        <v-flex>
                            <v-card class="mx-auto" style="max-width: 600px;">
                                <v-form ref="form" v-model="form">
                                    <v-card-title class="py-4 teal">
                                        <h4 class="m-0">Send Mail</h4>
                                    </v-card-title>
                                    <v-card-text v-if="!done">
                                        <v-text-field v-model="name" prepend-icon="far fa-user" :rules="[rules.required]" solo color="teal" label="Name"></v-text-field>
                                        <v-text-field v-model="company" prepend-icon="far fa-building" solo color="teal" label="Company"></v-text-field>
                                        <v-select v-model="requirement" prepend-icon="far fa-list-ol" :rules="[rules.required]" :items="items" color="teal" solo label="Requirement"></v-select>
                                        <v-text-field v-model="email" prepend-icon="far fa-envelope" :rules="[rules.email]" solo color="teal" label="Email"></v-text-field>
                                        <v-textarea v-model="text" prepend-icon="far fa-comment-alt-dots" :rules="[rules.required]" auto-grow solo color="teal" rows="5" label="Text"></v-textarea>
                                    </v-card-text>
                                    <v-card-text v-else>
                                        test
                                    </v-card-text>
                                    <v-divider></v-divider>
                                    <v-card-actions class="justify-end">
                                        <v-btn flat @click="$refs.form.reset()">Clear</v-btn>
                                        <v-btn :disabled="!form" :loading="isLoading" @click="contactSend()" class="white--text" color="teal" depressed>Send</v-btn>
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
        name: [],
        company: [],
        requirement: [],
        email: undefined,
        text: [],
        items: ['制作の依頼', 'スカウト', '個人的なご連絡'],
        form: false,
        isLoading: false,
        errors: [],
        done: false,
        rules: {
            email: v => (v || '').match(/@/) || 'Please enter a valid email',
            required: v => !!v || 'This field is required'
        }
    }),
    methods: {
        contactSend() {
            const url = '/api/contact';
            const self = this;
            var params = {
                name: this.name,
                company: this.company,
                requirement: this.requirement,
                email: this.email,
                text: this.text
            };

            //axiosでPOST送信
            axios.post(url, params).then(res => {
                console.log(res.data);
            })
            .catch(
                err => {
                    //例外処理を行う    
                }
            );
        }
    }
}
</script>