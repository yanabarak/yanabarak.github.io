<template>
    <footer class="row">
        <div class="row border-bottom-2">
            <div class="col-sm-6 col-xl-3">
                <img src="../assets/logo_white.png" alt="Logo" class="w-100">
                <p class="light last-p">
                    Науково-виробниче агропромислове підприємство «Ель Гаучо» більше 10 років займаємося рослинництвом: вирощуємо сорти та гібриди актуальних культур для цього регіону.
                </p>
            </div>
            <div class="col-sm-6 col-xl-3">
                <p class="bold gold">Розділи сайту:</p>
                <ul>
                    <li>Головна</li>
                    <li>Про компанію</li>
                    <li>Новини</li>
                    <li>Рослинництво</li>
                    <li>Тваринництво</li>
                    <li>Контакти</li>
                </ul>
            </div>
            <div class="col-sm-12 col-xl-5">
                <p class="bold gold">Контакти:</p>
                <p class="light">
                    <span class="gold"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg>
                    </span>
                    Тернопільська обл., Залішицький р-н, с. Товсте</p>
                <p class="light">
                    <span class="gold"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                    </svg>
                    </span>
                    <a href="tel:+380674014948">+38 (067) 401-49-48</a></p>
                <p class="light last-p">
                    <span class="gold"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                    </svg>
                    </span>
                    <a href="mailto:m.volchenko@agrosem.ua">m.volchenko@agrosem.ua</a></p>
            </div>
        </div>
        <div class="row justify-content-between d-flex align-items-center">
            <p class="light">Ель Гаучо © 2020. Всі права захищені.</p>
            <p class="light"><a target="_blank" href="#">Політика конфіденційності</a></p>
            <p>
                <a href="#" target="_blank"><span class="social"><img src="../assets/icon_facebook.svg" alt="icon_facebook"></span></a>
                <a href="#" target="_blank"><span class="social"><img src="../assets/icon_instagram.svg" alt="icon_instagram"></span></a>
                <a href="#" target="_blank"><span class="social"><img src="../assets/icon_youtube.svg" alt="icon_youtube"></span></a>
                    <a href="#" target="_blank"><span class="social"><img src="../assets/icon_telegram.svg" alt="icon_telegram"></span></a>
            </p>
            <div class="align-items-baseline d-flex"><p class="light">Розробка сайту</p><img src="../assets/moon.png" alt="moon logo" class="moon"></div>
        </div>
    </footer>
</template>

<style lang="scss">
    @import "../assets/SCSS/variable";
    footer{
        padding: 5vw 18.8vw 0vw 18.6vw;
        background-color: #421100;
        color: white;
        font-size: 18px;

        .border-bottom-2{
            border-bottom: 2px solid rgba(208,140,0,0.2);
            width: 100%;
        }

        .col-xl-3:first-child {
            padding-left: 0px;
        p{
            font-size: 16px;
            margin-top: 22px;
        }
        }
        .col-xl-5 p{
            white-space: nowrap;
        }
        .col-xl-5{
            padding-right: 0px;
        }
        span.gold{
            margin-right: 27px;
            svg{
                height: 15px;
            }
        }
        a{
            color: white;
            text-decoration: none;

            &:hover{
                color: $color_imp;
            }
        }
        .bold.gold{
            margin-top: 40px;
            margin-bottom: 37px;
        }
        ul{
            list-style-type: none;
            padding-left: 0px;
            -moz-column-count: 2;
            -webkit-column-count: 2;
            column-count: 2;

            li{
                margin-bottom: 20px;
            }
        }
        .row.justify-content-between {
            width:100%;
            margin: 50px -15px;
            font-size: 14px;
            p{
            font-size: 14px;
            }
        }
        span.social{
            margin-right: 19px
        }
        .align-items-baseline img{
            margin-left: 30px;
        }

    }
    @media (min-width: 1500px) {
        footer {
            .col-xl-4,.col-xl-3{
                flex-basis: 30%;
                max-width: 30%;
            }
            .col-xl-5 {
                flex-basis: 40%;
                max-width: 40%;
            }
        }
    }
    @media screen and (max-width: 992px) {
        footer {
            padding: 15vw 10vw 0vw 10vw;
            .border-bottom-2, .row.justify-content-between{
                width: auto;
            }
        }
        footer .col-xl-5 p {
            white-space: pre-wrap;
        }
    }
</style>