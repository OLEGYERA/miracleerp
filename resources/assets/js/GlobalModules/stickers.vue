<template>
    <transition name="slide-fade" v-if="sticker_show">
        <div class="mc-sticker">
            <div class="sticker-status-side">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="sticker-content-side">
                <div class="sticker-title">
                    {{title}}
                </div>
                <div class="mc-sticker-close">
                    <i class="fas fa-times" @click="sticker_show = false"></i>
                </div>
                <div class="mc-sticker-show">
                    <i class="far fa-eye"></i>
                </div>
            </div>

        </div>
    </transition>
<!--        {{max_stickers}}-->
</template>

<script>
    export default {
        props: ['id', 'title'],
        mounted() {
            this.sticker_show = true;
        },
        data: function(){
            return{
                /*data*/
                sticker_show: false,
                /*conditions*/

                /*errors*/

            }
        },
        methods: {

        }

    }
</script>
