<template>
  <div>
    <topo-padrao @navegar="componente = $event" />
    <conteudo v-if="visibilidade" :conteudo="componente"></conteudo>
  </div>
</template>

<script>
import ConteudoComponent from "./components/layouts/ConteudoComponent.vue";
import TopoPadrao from "./components/layouts/TopoPadrao.vue";

export default {
  name: "App",
  data: () => ({
    visibilidade: true,
    componente: "HomeView",
  }),
  components: {
    Conteudo: ConteudoComponent,
    TopoPadrao: TopoPadrao,
  },
};
</script>

<style scoped></style>
