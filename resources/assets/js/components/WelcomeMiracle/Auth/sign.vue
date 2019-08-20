<template>
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
                    <img src="img/logo/Logo_img.png" alt="">
                    РЕГИСТРАЦИЯ
                </h1>
                <form action="#" class="mc-form">
                    <div class="mc-inp-box">
                        <div class="mc-inp-logo"><i class="fas fa-envelope"></i></div>
                        <input class="mc-inp" type="email" name="email" placeholder="E-mail">
                        <div class="mc-inp-helper"><i class="fas fa-info"></i></div>
                    </div>
                    <div class="mc-inp-box">
                        <div class="mc-inp-logo"><i class="fas fa-lock"></i></div>
                        <input class="mc-inp" type="password" name="password" placeholder="Пароль">
                        <div class="mc-inp-helper"><i class="fas fa-info"></i></div>
                    </div>
                    <div class="mc-inp-box">
                        <div class="mc-inp-logo"><i class="fas fa-lock-open"></i></div>
                        <input class="mc-inp" type="password" name="re-password" placeholder="Повторите пароль">
                        <div class="mc-inp-helper"><i class="fas fa-info"></i></div>
                    </div>
                    <button class="mc-btn submit sign">Прочесть пользовательское соглашение</button>
                    <div class="mc-inp-box right">
                        <router-link :to="{name: 'login'}" class="mc-ask-accout">Уже есть аккаунт?</router-link>
                    </div>
                </form>
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
