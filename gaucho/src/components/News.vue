<template>
    <div class="row section-7">
        <h1 class="text-left brown">Новини</h1>
        <div class="row mt-38">
            <NewsItem
                    v-for="(article, i) of news"
                    :index="i"
                    :todo="article"
                    :key="article.id"
                    v-bind:article=article
            />
        </div>
    </div>
</template>

<script>
  import NewsItem from '@/components/NewsItem.vue'

  export default {
    components: {
      NewsItem
    },
    data() {
      return {
        news: [
          {
            'id' : 0,
            'img' : require('@/assets/news_1.png'),
            'date' : 'Серпень 02, 2020',
            'title' : 'Триває будівництво другої ферми.',
            'info' : 'рибатекст допоможе дизайнеру, верстальщику, вебмастеру сгенерувати декілька абзаців, більш м\'яких, ніж осміленого, текстових виробів на російській мові, а починаючи оратору відбивати важливих публікацій у домашніх умовах.',
            'url' : '/about'
          },

          {
            'id' : 1,
            'img' : require('@/assets/news_2.png'),
            'date' : 'Серпень 02, 2020',
            'title' : 'Триває будівництво другої ферми.',
            'info' : 'рибатекст допоможе дизайнеру, верстальщику, вебмастеру сгенерувати декілька абзаців, більш м\'яких, ніж осміленого, текстових виробів на російській мові, а починаючи оратору відбивати важливих публікацій у домашніх умовах.',
            'url' : '/about'
          },

          {
            'id' : 2,
            'img' : require('@/assets/news_3.png'),
            'date' : 'Серпень 02, 2020',
            'title' : 'Триває будівництво другої ферми.',
            'info' : 'рибатекст допоможе дизайнеру, верстальщику, вебмастеру сгенерувати декілька абзаців, більш м\'яких, ніж осміленого, текстових виробів на російській мові, а починаючи оратору відбивати важливих публікацій у домашніх умовах.',
            'url' : '/about'
          }
        ]
      }
    }
  }
</script>

<style lang="scss">
    .section-7 {
        padding: 4.4vw 18.6vw 12vw 18.6vw;
        background: transparent url("../assets/cowboy2.png") 0% 0% no-repeat padding-box;
        background-position-x: 71vw;
        background-position-y: 27vw;
        background-size: 60vw;

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
    @media screen and (max-width: 992px) {
        .section-7 {
            padding: 15vw 10vw !important;
            background: none;
        }
        h1{
            font-size: 2rem;
        }
    }
</style>