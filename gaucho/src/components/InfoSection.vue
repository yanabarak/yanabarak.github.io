<template>
    <div class="row section-1">
        <div class="col-md-6 p-0">
            <div class="item">
                <div class="item__image">
                    <img src="@/assets/people-1550501_1920-1.png" alt="">
                </div>
                <div class="item__text text-left text-white">
                    <h1 class="bold">Тваринництво: вівчарні ферми пород Мерінос</h1>
                    <p class="light first-p last-p">
                        З 2018 року в Українській Асоціації Вівчарів. До 3000 голів у 2020. Експорт м'яса до Європи та Близького Сходу.
                    </p>
                    <router-link to="/about" class="button bold">Детальніше
                        <svg width="36px" height="24px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                        </svg>
                    </router-link>
                </div>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div class="item">
                <div class="item__image">
                    <img src="@/assets/people-1550501_1920.png" alt="">
                </div>
                <div class="item__text text-left text-white">
                    <h1 class="bold">Рослинництво: вирощування культур, виробництво насіння</h1>
                    <p class="light first-p last-p">
                        Вже більше 10 років ми займаємося рослинництвом: вирощуємо сорти та гібриди актуальних культур.
                    </p>
                    <router-link to="/about" class="button bold">Детальніше
                        <svg width="36px" height="24px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                            <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                        </svg>
                    </router-link>
                </div>
            </div>

        </div>
    </div>
</template>


<style lang="scss">
    @import "../assets/SCSS/variable";

    .section-1{
        .col-md-6{
            background-image: url("../assets/1.png");
            background-repeat: no-repeat;
            background-size: cover;

            .item{
                height: 100%;
                padding: 17.9vw 11vw 12vw 18.6vw;
            }

            img{
                mix-blend-mode: multiply;
            }
        }
        .col-md-6:nth-child(even){
            background-image: url("../assets/field-of-golden-wheat.png");

            h1{
                margin-right: -8.6vw;
            }

            .item{
                padding: 17.9vw 18.6vw 12vw 11vw;
            }
        }
    }
    .item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    .item__image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .item__image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .item__text {
        mix-blend-mode: screen;
    }

    @media screen and (max-width: 992px) {
        .section-1 .col-md-6 .item {
            padding: 15vw 10vw !important;
        }
        h1{
            font-size: 2rem;
        }
    }
</style>
