<template>
  <div class="col-lg-9">
    <div class="main_content">
      <Blog />
    </div>
    <LoadMore />
  </div>
</template>

<script>
import Blog from '~/components/Blog'
import LoadMore from '~/components/LoadMore'

export default {
  components: {
    Blog,
    LoadMore
  }
}
</script>
