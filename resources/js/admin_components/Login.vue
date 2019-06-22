
<template>
    <v-content>

        <v-container fluid>
            <div class="container-outer">
                <div class="container-inner">
                    <v-form ref="form" v-model="valid" lazy-validation>
                        <v-text-field　type="email" v-model="loginForm.email" :counter="10" :rules="emailRules" label="Accountid" required></v-text-field>
                        <v-text-field　type="password" v-model="loginForm.password" :counter="10" :rules="passwordlRules" label="Password" required></v-text-field>

                        <v-btn :disabled="!valid" color="teal" @click="validate" type="submit">
                        submit
                        </v-btn>
                    </v-form>
                </div>
            </div>
        </v-container>

    </v-content>
</template>

<script>
    export default {
        data: () => ({
        loginForm: {
            email: '',
            password: ''
        },
            valid: true,
            email: '',
            emailRules: [
            v => !!v || 'E-mail is required',
            v => /.+@.+/.test(v) || 'E-mail must be valid'
            ],
            valid: true,
            password: '',
            
        }),
        methods: {
            validate () {
                if (this.$refs.form.validate()) {
                    this.snackbar = true
                }
            }
        }
    }
</script>