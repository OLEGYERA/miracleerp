<template>
<!--    {{ $route.params.email }}-->
    <div class="mc-content">
        <div class="mc-info mc-mirror">
            <div class="mc-backgrounds">
                <div class="mc-bg-els mc-bg-el-1">

                </div>
            </div>
        </div>
        <div class="mc-work mc-mirror">
            <div class="center-box">
                <h1 class="mc-title">
                    <img src="/img/logo/Logo_img.png" alt="">
                    Верификация
                </h1>
                <form @submit.prevent="verification" class="mc-form">
                    <div class="mc-inp-box">
                        <transition name="slide-fade">
                            <div v-if="token_verify == 2" class="mc-inp-error">
                                {{tokenError}}
                            </div>
                        </transition>
                        <div class="mc-inp-logo" v-bind:class="{ green : token_verify == 1, red : token_verify == 2}" ><i class="fas fa-key"></i></div>
                        <input class="mc-inp" type="text" v-model="token" @blur="afterFocusToken" placeholder="32-значный код" required>
                        <div class="mc-inp-helper"><i class="fas fa-info"></i></div>
                    </div>
                    <button class="mc-btn submit sign">Подтвердить</button>
                    <div class="mc-inp-box right">
                        <router-link :to="{name: 'login'}" class="mc-ask-accout">Не пришел код?</router-link>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import {HTTP} from '../../../http.js'

    export default {
        mounted() {
            HTTP.post(`exist/email`, {
                email: this.$route.params.email
            })
                .then(response => {
                    if(response.data == false) this.$router.push({ name: 'signin'})
                })
                .catch(error => {
                    this.$router.push({ name: 'signin'})
            })
        },
        data: function(){
            return{
                /*data*/
                token: null,
                /*conditions*/
                token_verify: 0,
                /*errors*/
                tokenError: null,
            }
        },
        methods: {
            verification(){
                HTTP.post(`verify/token`, {
                    email: this.$route.params.email,
                    token: this.token,
                })
                    .then(response => {
                        this.token_verify = 1;
                    })
                    .catch(error => {
                        if(error.response.status == 412){
                            this.tokenError = error.response.data.token[0];
                        }else{
                            this.tokenError = error.response.data.errors.token[0];
                        }
                        this.token_verify = 2;


                    })
            },
            afterFocusToken(){
                if(this.token)
                    this.token_verify = (this.token.length == 32) ? 1 : 2;
                    if(this.token_verify == 2) this.tokenError = (this.token.length > 32) ? 'Ключ не должен превышать 32 символа.' : 'Ключ не должен быть меньше 32 символов.';
            },
        },

    }
</script>

