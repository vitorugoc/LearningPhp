<template>
  <div>
    <VagasFavoritas></VagasFavoritas>
    <topo-padrao @navegar="componente = $event" />
    <AlertaComponent v-if="exibirAlerta" :tipo="alerta.tipo">
      <template v-slot:titulo>
        <h5>{{ alerta.titulo }}</h5>
      </template>
      <p>{{ alerta.descricao }}</p>
    </AlertaComponent>
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
    alerta: {
      tipo: "",
      titulo: "",
      descricao: "",
    },
    visibilidade: true,
    componente: "HomeView",
    exibirAlerta: false,
  }),
  components: {
    Conteudo: ConteudoComponent,
    TopoPadrao: TopoPadrao,
    VagasFavoritas: VagasFavoritas,
    AlertaComponent,
  },
  mounted() {
    this.emitter.on("alerta", (a) => {
      this.exibirAlerta = true;
      this.alerta = a;
      setTimeout(() => {
        this.exibirAlerta = false;
      }, 4000);
    });
  },
};
</script>

<style scoped></style>
