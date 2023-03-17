<template>
  <div>
    <topo-padrao />
    <conteudo></conteudo>
  </div>
</template>

<script>
import ConteudoComponent from './components/layouts/ConteudoComponent.vue'
import TopoPadrao from './components/layouts/TopoPadrao.vue'

export default {
  name: 'App',
  components: {
    Conteudo: ConteudoComponent,
    TopoPadrao: TopoPadrao
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
}
</style>
