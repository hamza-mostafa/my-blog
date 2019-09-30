<template>
  <div class="container">
    <vue-particles
      color="#555"
      :particleOpacity="0.7"
      :particlesNumber="200"
      shapeType="circle"
      :particleSize="4"
      linesColor="#90eeee"
      :linesWidth="0.5"
      :lineLinked="true"
      :lineOpacity="0.7"
      :linesDistance="200"
      :moveSpeed="2"
      :hoverEffect="true"
      hoverMode="grab"
      :clickEffect="true"
      clickMode="repulse"
    >
    </vue-particles>
    <div class="memo">
      Note to self ...
    </div>
  </div>
</template>

<script>
export default {
  layout: 'default'
}
</script>

<style>
.memo {
  font-size: 50px;
  font-weight: 600;
  position: absolute;
  bottom: 0;
  right: 25%;
}
vue-particles {
  height: 100%;
}
</style>
