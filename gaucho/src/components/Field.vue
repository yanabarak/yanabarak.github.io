<template>
    <div class="row section-3" v-bind:class="{ 'bg_cowboy': field1.tvar }">
        <div class="row">
            <div class="col-md-6 brown">
                <h1>{{field1.title}}</h1>
                <p class="first-p last-p">
                   {{field1.short_info}}
                </p>
                <router-link :to=field1.url class="button bold gold">Детальніше
                    <svg width="36px" height="24px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                    </svg>
                </router-link>
            </div>
            <div class="col-md-6">
                <div class=" info align-content-center">
                <div class="info1 text-center">
                    <img :src="field1.img1" alt="Field">
                    <span class="bold brown">{{field1.des1[0]}}</span>
                    <span class="gold">{{field1.des1[1]}}</span>
                </div>
                <div class="info1 text-center">
                    <img :src="field1.img2" alt="Field" >
                    <span class="bold brown">{{field1.des2[0]}}</span>
                    <span class="gold">{{field1.des2[1]}}</span>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 brown">
                <p class="first-p">
                    {{field1.info1}}
                </p>
                <p class="last-p" v-bind:class="{ 'd-none': (!field1.tvar) }">
                    {{field1.info2}}
                </p>
            </div>
        </div>

    </div>
</template>

<script>
  export default {
    props: ['field1'],
  }
</script>

<style lang="scss">
    .section-3{
        padding: 9.6vw 18.6vw 3vw 18.6vw;

        .row:first-child .col-md-6:first-child {
            padding-right: 4vw;
        }
        &.bg_cowboy{
            background: transparent url(../assets/cowboy.png) 0% 0% no-repeat padding-box;
            background-position-x: -35vw;
            background-position-y: 7vw;
            background-size: 70vw;
        }

        .row:first-child .col-md-6:last-child{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        .info{
            display: flex;
            flex-direction: row;
            justify-content: center;

            img{
                margin-bottom: 25px;
                height: 100%;
                -o-object-fit: cover;
                object-fit: contain;
                max-height: 87px;
            }
        }
        .info1 {
            margin: 0 50px;
            display: flex;
            flex-direction: column;

            .bold.brown{
                font-size: 30px;
            }
        }

    }
    @media screen and (max-width: 992px) {
        .section-3 {
            padding: 15vw 10vw 0vw !important;

            .info1{
                width: 50%;
                justify-content: space-between;
                margin: 0;

                img{
                    max-height: 25%;
                }

                .bold.brown{
                    font-size: 20px;
                }
            }

            &.bg_cowboy{
                background-image: none;
            }

            .row:first-child .col-md-6 {
                padding-right: 0;
            }

            .row:first-child .col-md-6:last-child {
                margin-top: 48px;
            }
        }
    }

</style>