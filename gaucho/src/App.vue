<template>
  <div id="app">
    <div class="container-fluid">
    <Navbar />
    <router-view/>
      <Footer />
    </div>
  </div>
</template>

<script>
  import Navbar from '@/components/Navbar.vue'
  import Footer from '@/components/Footer.vue'
  export default {
    name: 'Home',
    components: {
      Navbar,
      Footer
    }
  }
</script>
<style lang="scss">
  @import "assets/SCSS/variable";
  @import "assets/SCSS/main";
</style>
