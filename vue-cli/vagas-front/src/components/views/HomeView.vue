<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <PesquisarVagas></PesquisarVagas>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-4">
        <IndicadorComponent />
      </div>
      <div class="col-4">
        <IndicadorComponent />
      </div>
      <div class="col-4">
        <IndicadorComponent />
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
