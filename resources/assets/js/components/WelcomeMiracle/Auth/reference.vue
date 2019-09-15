<template>
    <div class="mc-content">
        122
    </div>
</template>



<script>
    import {HTTP} from '../../../http.js'

    export default {
        mounted() {
            HTTP.post(`reference/token`, {
                email: this.$route.params.email,
                token: this.$route.params.token,
            })
                .then(response => {
                    console.log(response);
                    if(response.data == false) this.$router.push({ name: 'signin'})
                })
                .catch(error => {
                    this.$router.push({ name: 'signin'})
                })
        },
    }
</script>
