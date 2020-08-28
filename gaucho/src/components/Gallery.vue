<template>
    <div class="row section-4">
        <div class="column">
            <img src="../assets/baran_1.png" alt="Baran`s photo">
            <img src="../assets/baran_2.png" alt="Baran`s photo">
        </div>
        <div class="column">
            <img src="../assets/baran_3.png" alt="Baran`s photo" class=" d-none d-md-block"></div>
        <div class="column">
            <img src="../assets/baran_4.png" alt="Baran`s photo" class=" d-none d-md-block">
            <img src="../assets/baran_5.png" alt="Baran`s photo" class=" d-none d-md-block">
        </div>
        <div class="column">
            <img src="../assets/baran_6.png" alt="Baran`s photo" class=" d-none d-md-block">
        </div>
    </div>
</template>

<style lang="scss">
    .section-4{
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap !important;

        .column{
            display: flex;
            flex-grow: 1;
            flex-direction: column;
            max-width: 25vw;

            img{
                object-fit: cover;
                margin: 10px;
            }
            &:first-child img{
                margin-left: 0px;
            }
            &:last-child img{
                margin-right: 0px;
            }
        }
    }

    @media screen and (max-width: 1199px){
        .section-4 .column{
            max-width: 100%;
            flex-wrap: wrap !important;
             img{
                margin-left: 10px !important;
                 margin-right: 10px !important;
            }
        }
    }
    @media screen and (max-width: 768px){
        .section-4 .column{
            img{
                margin: 5px 0px !important;
            }
        }
    }

</style>