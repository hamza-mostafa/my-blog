<template>
  <div class="contain">
    <div class="wrapper bg">
      <Header class="header">
        <Menu class="menu" />
      </Header>
      <Nuxt />
      <div class="push"></div>
    </div>
    <Footer class="footer">Here</Footer>
  </div>
</template>

<script>
import Header from '@/component/layout/Header'
import Footer from '@/component/layout/Footer'
import Menu from '@/component/layout/Menu'

export default {
  components: {
    Header,
    Footer,
    Menu
  }
}
</script>

<style>
.header {
  margin-bottom: 5%;
}

.contain {
  height: 100%;
  margin: 0;
}

.wrapper {
  min-height: 100%;
  max-width: 60%;
  margin: 0 auto -20px;
}
.footer,
.push {
  height: 20px;
}

.footer {
  font-size: 0.8rem;
  vertical-align: bottom;
  color: white;
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0) 20%,
    #555 27%,
    #555,
    #555,
    #555,
    #555 72%,
    rgba(0, 0, 0, 0) 80%
  );
  text-align: right;
  padding-right: 25%;
  margin-top: 50px;
}
</style>
