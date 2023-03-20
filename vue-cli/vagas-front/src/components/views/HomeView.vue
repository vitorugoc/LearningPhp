<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <PesquisarVagas></PesquisarVagas>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-4">
        <IndicadorComponent titulo="Vagas Abertas" indicador="100" />
      </div>
      <div class="col-4">
        <IndicadorComponent titulo="Profissionais Cadastrados" indicador="125" />
      </div>
      <div class="col-4">
        <IndicadorComponent titulo="Visitantes Online" indicador="25" />
      </div>
    </div>
  </div>
</template>

<script>
import PesquisarVagas from "../comuns/PesquisarVagas.vue";
import IndicadorComponent from "../comuns/IndicadorComponent.vue";
export default {
  name: "HomeView",
  components: {
    PesquisarVagas,
    IndicadorComponent,
  },
  activated() {
    console.log("Componente é ativado");
  },
  deactivated() {
    console.log("Componente é desativadp");
  },
  beforeUnmount() {
    console.log("Antes de desmontar");
  },
  unmounted() {
    console.log("Desmontado");
  },
};
</script>

<style scoped></style>
