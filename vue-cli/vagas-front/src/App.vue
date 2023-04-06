<template>
  <div>
    <h1>Componente App</h1>
    <button @click="desmontarComponente()">Desmontar o componente Conteudo</button>
    <topo-padrao :funcaoCallback="acao" />
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
      console.log(
        "Função de callback definida no componente Pai e chamada no componente Filho"
      );
    },
  },
  components: {
    Conteudo: ConteudoComponent,
    TopoPadrao: TopoPadrao,
  },
};
</script>

<style scoped></style>
