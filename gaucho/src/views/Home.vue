<template>
  <div>
    <InfoSection />
    <ScienceSection />
    <Field v-bind:field1=field1 />
    <Gallery />
    <Video />
    <BlockForm />
    <Field v-bind:field1=field2 />
    <GalleryGrow />
    <BlockForm />
    <News />
  </div>
</template>

<script>
  import InfoSection from '@/components/InfoSection.vue'
  import ScienceSection from '@/components/ScienceSection.vue'
  import Field from '@/components/Field.vue'
  import Gallery from '@/components/Gallery.vue'
  import Video from '@/components/Video.vue'
  import BlockForm from '@/components/BlockForm.vue'
  import GalleryGrow from '@/components/GalleryGrow.vue'
  import News from '@/components/News.vue'

  export default {
    name: 'Home',
    components: {
      InfoSection,
      ScienceSection,
      Field,
      Gallery,
      Video,
      BlockForm,
      GalleryGrow,
      News
    },
    data() {
      return {
        field1: {
          'title': 'Тваринництво',
          'short_info': 'Розведення вівців породи Мериноландшаф, яких привезли з Австрії. Ці тварини добре пристосовуються до різних кліматичних умов, проте для формування здорового організму їм потрібен комфорт.',
          'url': '/about',
          'info1': 'Європейський досвід і мрія про відродження вівчарства в Україні стали ключовими у виборі нової галузі господарства. Для розведення обрали вівців породи Мериноландшаф, яких привезли з Австрії. Ці тварини добре пристосовуються до різних кліматичних умов, проте для формування здорового організму їм потрібен комфорт. Тому ми збудували з екологічно чистих матеріалів дві сучасні ферми.',
          'info2': 'Просторі стайні, достатньо кисню для дихання та світла, постійний доступ до їжі – усе задля комфорту тварин! А отже – гарні умови для формування племінного генетичного матеріалу! Європейський досвід і мрія про відродження вівчарства в Україні стали ключовими у виборі нової галузі господарства. Для розведення обрали вівців породи Мериноландшаф, яких привезли з Австрії. Ці тварини добре пристосовуються до різних кліматичних умов, проте для формування здорового організму їм потрібен комфорт. Тому ми збудували з екологічно чистих матеріалів дві сучасні ферми. Просторі стайні, достатньо кисню для дихання та світла, постійний доступ до їжі – усе задля комфорту тварин! А отже – гарні умови для формування племінного генетичного матеріалу!',
          'tvar': true,
          'img1': require('@/assets/sheep.png'),
          'des1': ['2 500','голів'],
          'img2': require('@/assets/sheep2.png'),
          'des2': ['Мерінос','порода'],
        },
        field2: {
          'title': 'Рослинництво',
          'short_info': 'Розведення вівців породи Мериноландшаф, яких привезли з Австрії. Ці тварини добре пристосовуються до різних кліматичних умов, проте для формування здорового організму їм потрібен комфорт.',
          'url': '/about',
          'info1': 'Науково-виробниче агропромислове підприємство «Ель Гаучо» знаходиться на Тернопільщині. Вже більше 10 років ми займаємося рослинництвом: вирощуємо сорти та гібриди актуальних культур для цього регіону. З кожним роком фермерське господарство розвивається в галузі рослинництва, робить акцент на інтенсивність технології з дотриманням максимальних врожаїв. Науково-виробниче агропромислове підприємство «Ель Гаучо» знаходиться на Тернопільщині. Вже більше 10 років ми займаємося рослинництвом: вирощуємо сорти та гібриди актуальних культур для цього регіону. З кожним роком фермерське господарство розвивається в галузі рослинництва, робить акцент на інтенсивність технології з дотриманням максимальних врожаїв. Науково-виробниче агропромислове підприємство «Ель Гаучо» знаходиться на Тернопільщині. Вже більше 10 років ми займаємося рослинництвом: вирощуємо сорти та гібриди актуальних культур для цього регіону. З кожним роком фермерське господарство розвивається в галузі рослинництва, робить акцент на інтенсивність технології з дотриманням максимальних врожаїв.',
          'info2': true,
          'tvar': false,
          'img1': require('@/assets/wheat.png'),
          'des1': ['Насіння','Завод з виробництва'],
          'img2': require('@/assets/wheat1.png'),
          'des2': ['10 років','Рослинництва'],
        },
      }
    },
  }


</script>