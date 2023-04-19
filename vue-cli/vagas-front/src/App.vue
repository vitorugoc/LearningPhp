<template>
  <div>
    <VagasFavoritas></VagasFavoritas>
    <topo-padrao @navegar="componente = $event" />
    <AlertaComponent v-if="exibirAlerta">
      <template v-slot:titulo>
        <h5>Titulo do alerta</h5>
      </template>
      <template v-slot:descricao>
        <p>Conteudo do alerta</p>
      </template>
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
    this.emitter.on("alerta", () => {
      this.exibirAlerta = true;
      setTimeout(() => {
        this.exibirAlerta = false;
      }, 4000);
      console.log("Alerta");
    });
  },
};
</script>

<style scoped></style>
