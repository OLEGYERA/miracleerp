<template>
    <header class="mc-header">
        <router-link :to="{name: 'mainWelcome'}" class="mc-logo">
            <img v-if="routeName == 'mainWelcome'" src="/img/logo/Logo.png" alt="">
            <img v-else src="/img/logo/Logo-wt.png" alt="">
        </router-link>
        <div class="mc-menu">
            <div class="mc-visible" v-bind:class="{'mc-mirror': routeName != 'mainWelcome'}">
                <div class="title">MENU</div>
                <div class="visual">
                    <span class="re el-1"></span>
                    <span class="re el-2"></span>
                    <span class="re el-3"></span>
                    <span class="re el-4"></span>
                    <span class="re el-5"></span>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        data: function(){
            return{
                routeName: this.$route.name,
            }
        },
        watch: {
            '$route' (to, from) {
                this.routeName = this.$route.name;
            },
        }
    }
</script>
