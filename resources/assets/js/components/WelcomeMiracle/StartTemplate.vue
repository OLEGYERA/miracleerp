<template>
    <div class="mc-start">
        <header-welcome></header-welcome>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
