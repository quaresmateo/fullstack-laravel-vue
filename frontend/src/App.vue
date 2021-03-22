<template>
  <div id="app">
    <NavBar />
    <router-view />
  </div>
</template>

<script>
import NavBar from '@/components/NavBar.vue'
export default {
  name: 'App',
  components: { NavBar }
}
</script>

<style>
:root {
  --gray-light: #eee;
}

body {
  background-color: var(--gray-light) !important;
}

.title-page {
  font-weight: 800;
  color: var(--gray) !important;
}
</style>
