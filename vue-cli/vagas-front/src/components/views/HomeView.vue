<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <PesquisarVagas></PesquisarVagas>
      </div>
    </div>
    <ListaVagas> </ListaVagas>

    <div class="row mt-5">
      <div class="col-4">
        <IndicadorComponent
          titulo="Vagas Abertas"
          indicador="100"
          bg="bg-dark"
          color="text-white"
        />
      </div>
      <div class="col-4">
        <IndicadorComponent
          titulo="Profissionais Cadastrados"
          indicador="125"
          bg="bg-dark"
          color="text-white"
        />
      </div>
      <div class="col-4">
        <IndicadorComponent
          titulo="Visitantes Online"
          :indicador="usuariosOnline"
          bg="bg-light"
          color="text-dark"
        />
      </div>
    </div>
  </div>
</template>

<script>
import PesquisarVagas from "../comuns/PesquisarVagas.vue";
import IndicadorComponent from "../comuns/IndicadorComponent.vue";

import ListaVagas from "../comuns/ListaVagas.vue";

export default {
  name: "HomeView",
  components: {
    PesquisarVagas,
    IndicadorComponent,
    ListaVagas,
  },
  data: () => ({
    usuariosOnline: 0,
  }),
  methods: {
    getUsuariosOnline() {
      this.usuariosOnline = Math.floor(Math.random() * 101);
    },
  },
  created() {
    setInterval(this.getUsuariosOnline, 1000);
  },
};
</script>

<style scoped></style>
