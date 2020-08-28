<template>
    <div class="row section-2">
        <div class="col-md-6 brown">
            <h1>Науково-виробниче Агропромислове підприємство</h1>
            <p class="first-p">
                Науково-виробниче агропромислове підприємство «Ель Гаучо» знаходиться на Тернопільщині.
                Вже більше 10 років ми займаємося рослинництвом: вирощуємо сорти та гібриди актуальних культур для цього регіону.
            </p>
            <p class="last-p">
                З кожним роком фермерське господарство розвивається в галузі рослинництва, робить акцент на інтенсивність технології
                з дотриманням максимальних врожаїв.
            </p>
            <router-link to="/about" class="button bold gold">Детальніше
                <svg width="36px" height="24px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                    <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                </svg>
            </router-link>
        </div>
    </div>
</template>

<style lang="scss">
    @import "../assets/SCSS/variable";
    .section-2{
        background-image: url("../assets/ua_bg.png");
        background-repeat: no-repeat;
        background-position: top right;
        border-bottom: 2px solid #F3F3F3;;

        .col-md-6{
            padding: 9.6vw 0vw 12vw 18.6vw;
        }
    }

    @media screen and (max-width: 992px) {
        .section-2 {
            background-size: contain;
            overflow: hidden;

            .col-md-6 {
                padding: 15vw 10vw !important;
            }
        }
    }


</style>