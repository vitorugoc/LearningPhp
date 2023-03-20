<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <PesquisarVagas></PesquisarVagas>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-4">
        <div class="h-100 p-5 rounded-3 border bg-dark text-white">
          <p>Vagas Abertas</p>
          <h2>25</h2>
        </div>
      </div>
      <div class="col-4">
        <div class="h-100 p-5 rounded-3 border bg-dark text-white">
          <p>Profissionais Cadastrados</p>
          <h2>125</h2>
        </div>
      </div>
      <div class="col-4">
        <div class="h-100 p-5 rounded-3 border bg-light text-dark">
          <p>Visitantes Online</p>
          <h2>15</h2>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PesquisarVagas from "../comuns/PesquisarVagas.vue";
export default {
  name: "HomeView",
  components: {
    PesquisarVagas,
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
