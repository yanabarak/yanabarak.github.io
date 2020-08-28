<template>
    <div class="col-sm-6 col-lg-4">
        <img :src="article.img" alt="News" class="w-100">
        <p class="gold light mt-38 mini">{{article.date}}</p>
        <h2 class="brown">{{article.title}}</h2>
        <p class="light mt-38 last-p">{{article.info}}</p>
        <router-link :to="article.url" class="button bold gold">Детальніше
            <svg width="36px" height="24px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
            </svg>
        </router-link>
    </div>
</template>

<script>
  export default {
    props: {
      article: {
        type: Object
      },
      index: {
        type: Number
      }
    }
  }
</script>
<style lang="scss">
    .section-7 {

    .col-sm-6 {
        padding: 0 8px;
    }
    .mt-38 {
        margin-top: 38px;
    }
    p.light.mt-38.last-p {
        max-width: 340px;
    }
    a.button{
        margin-bottom: 40px;
        display: block;
    }
    }
</style>