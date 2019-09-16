<template>
    <div class="mc-start">
        <header-welcome></header-welcome>
        <router-view></router-view>
        <footer-welcome></footer-welcome>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        // watch: {
        //     '$route' (to, from) {
        //         console.log(from);
        //     }
        // }
    }
</script>
