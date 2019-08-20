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
                    Войти
                </h1>
                <form action="#" class="mc-form">
                    <div class="mc-inp-box">
                        <div class="mc-inp-logo"><i class="fas fa-user"></i></div>
                        <input class="mc-inp" type="email" name="email" placeholder="Логин или E-mail">
                        <div class="mc-inp-helper"><i class="fas fa-info"></i></div>
                    </div>
                    <div class="mc-inp-box">
                        <div class="mc-inp-logo"><i class="fas fa-user"></i></div>
                        <input class="mc-inp" type="password" name="password" placeholder="Пароль">
                        <div class="mc-inp-helper"><i class="fas fa-info"></i></div>
                    </div>
                    <button class="mc-btn submit">АВТОРИЗАЦИЯ</button>
                    <div class="mc-inp-box right">
                        <a href="#" class="mc-ask-accout">
                            Нет аккаунта?
                        </a>
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
