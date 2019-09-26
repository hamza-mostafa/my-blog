<template>
  <div class="home_slider_container">
    <div class="owl-carousel owl-theme home_slider">
      <SliderItem />
    </div>
    <SliderCustom />
  </div>
</template>

<script>
import SliderItem from '~/components/SliderItem'
import SliderCustom from '~/components/SliderCustom'

export default {
  components: {
    SliderItem,
    SliderCustom
  }
}
</script>
