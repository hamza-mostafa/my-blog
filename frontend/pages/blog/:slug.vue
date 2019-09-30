<template>
  <!-- prettier-ignore -->
  <div>
    <div class="m-3">
      <div
        class="h1 title"
        v-text="article.title"
      />
      <div class="float-right">
        {{article.created_at | moment("from", "now")}}
      </div>
      <div class="hr"></div>
    </div>
    <img
      class="img-fluid margin-below"
      :src="`${$axios.defaults.baseURL}/storage/${article.image}`"
      alt="myImage"
      srcset=""
    >
    <div v-html="article.body"></div>
  </div>
</template>

<script>
export default {
  layout: 'blog',
  async asyncData({ app, params }) {
    const article = await app.$axios.$get(
      `${app.$axios.defaults.baseURL}/api/articles/${params.slug}`
    )
    console.log(article)
    console.log(app.$axios.defaults.baseURL)
    return { article }
  }
}
</script>

<style>
.current {
  margin: 10px;
}
.margin-below {
  margin-bottom: 5%;
}

.title {
  font-size: 50px;
  /* font-weight: 500; */
  /* font-family: 'Roboto', sans-serif; */
  /* letter-spacing: 0.001px; */
}
.hr {
  height: 10px;
  border: 0;
  box-shadow: 0 10px 10px -10px #8c8b8b inset;
}
</style>
