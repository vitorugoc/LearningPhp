<template>
  <div>
    <h1>Componente App</h1>
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

<style scoped>
h1 {
  color: red;
}
</style>
