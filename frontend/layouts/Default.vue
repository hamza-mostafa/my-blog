<template>
  <div class="super_container">
    <Header />
    <Menu />
    <nuxt />
    <Footer />
  </div>
</template>

<script>
import Header from '~/components/Header'
import Footer from '~/components/Footer'
import Menu from '~/components/Menu'

export default {
  name: 'Layout',
  components: {
    Footer,
    Header,
    Menu
  },
  data() {
    return {}
  },
  head() {
    return {
      meta: [
        // hid is used as unique identifier. Do not use `vmid` for it as it will not work
        {
          hid: 'description',
          name: 'description',
          content: 'My custom description'
        }
      ]
    }
  }
}
</script>
