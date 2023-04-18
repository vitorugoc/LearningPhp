<template>
  <div>
    <AlertaComponent />
    <VagasFavoritas></VagasFavoritas>
    <topo-padrao @navegar="componente = $event" />
    <conteudo v-if="visibilidade" :conteudo="componente"></conteudo>
  </div>
</template>

<script>
import ConteudoComponent from "./components/layouts/ConteudoComponent.vue";
import TopoPadrao from "./components/layouts/TopoPadrao.vue";
import VagasFavoritas from "./components/comuns/VagasFavoritas.vue";
import AlertaComponent from "./components/comuns/AlertaComponent.vue";

export default {
  name: "App",
  data: () => ({
    visibilidade: true,
    componente: "HomeView",
  }),
  components: {
    Conteudo: ConteudoComponent,
    TopoPadrao: TopoPadrao,
    VagasFavoritas: VagasFavoritas,
    AlertaComponent,
  },
};
</script>

<style scoped></style>
