<template>
  <layout>
    <div class="page_content">
      <div class="container">
        <div class="row row-lg-eq-height">
          <Main />
        </div>
      </div>
    </div>
  </layout>
</template>

<script>
import Layout from '~/layouts/Default'
import Main from '~/components/Main'
export default {
  components: {
    Layout,
    Main
  }
}
</script>
