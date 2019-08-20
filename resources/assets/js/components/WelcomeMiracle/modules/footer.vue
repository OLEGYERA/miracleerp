<template>
    <footer class="mc-footer">
       <div class="mc-spec-main" v-if="routeName == 'mainWelcome'">
           <div class="mc-work">
               <div class="mc-soc-links">
                   <a href=""><i class="fab fa-facebook-square"></i></a>
                   <a href=""><i class="fab fa-linkedin"></i></a>
               </div>
           </div>
           <div class="mc-info">
               <div class="mc-copyright">©2019 Miracle, Inc.</div>
           </div>
       </div>
        <div class="mc-spec-other" v-else >
            <div class="mc-work">
                <div class="mc-copyright">©2019 Miracle, Inc.</div>
            </div>
            <div class="mc-info">
                <div class="mc-app-info">
                    <a href="">Конфиденциальность</a>
                    <a href="">Безопасность</a>
                    <a href="">Правила</a>
                    <a href="">Контакты</a>
                    <a href="">Создатели</a>
                </div>
            </div>
        </div>
    </footer>
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
