<template>
  <div>
    <h1>Componente App</h1>
    <button @click="desmontarComponente()">Desmontar o componente Conteudo</button>
    <topo-padrao @nomeDoEventoQueSeraCapturadoNoComponentePai="acao()" />
    <conteudo v-if="visibilidade"></conteudo>
  </div>
</template>

<script>
import ConteudoComponent from "./components/layouts/ConteudoComponent.vue";
import TopoPadrao from "./components/layouts/TopoPadrao.vue";

export default {
  name: "App",
  data: () => ({
    visibilidade: true,
  }),
  methods: {
    desmontarComponente() {
      this.visibilidade = false;
    },
    acao() {
      console.log("Chegamos no pai");
    },
  },
  components: {
    Conteudo: ConteudoComponent,
    TopoPadrao: TopoPadrao,
  },
};
</script>

<style scoped></style>
