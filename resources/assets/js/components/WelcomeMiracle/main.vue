<template>
    <div class="mc-content">
        <div class="mc-work">
            <div class="center-box">
                <h1 class="intro-title">
                    Умная & современная <br>
                    <b> ERP</b> система <b>-</b> для <b>IT</b>
                </h1>
                <div class="auth-box">
                    <router-link :to="{name: 'login'}" class="mc-btn">ВОЙТИ</router-link>
                    <router-link :to="{name: 'signin'}" class="mc-link">ЗАРЕГИСТРИРОВАТЬСЯ</router-link>
                </div>
            </div>
        </div>
        <div class="mc-info">
            <div class="mc-backgrounds">
                <div class="mc-bg-els mc-bg-el-1">

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
