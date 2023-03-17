<template>
  <div>
    <Topo />
    <ConteudoComponent></ConteudoComponent>
  </div>
</template>

<script>
import ConteudoComponent from './components/layouts/ConteudoComponent.vue'
import TopoPadrao from './components/layouts/TopoPadrao.vue'

export default {
  name: 'App',
  components: {
    ConteudoComponent,
    Topo: TopoPadrao
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
