<template>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          <div
            class="header_content d-flex flex-row align-items-center justify-content-start"
          >
            <Logo />
            <Nav />
            <SearchBox />
            <div class="hamburger ml-auto menu_mm">
              <i class="fa fa-bars trans_200 menu_mm" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import Logo from '../components/Logo'
import SearchBox from '../components/SearchBox'
import Nav from '../components/Nav'
export default {
  components: {
    Logo,
    SearchBox,
    Nav
  }
}
</script>

<style></style>
