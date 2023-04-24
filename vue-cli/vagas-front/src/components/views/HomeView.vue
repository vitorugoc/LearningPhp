<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <PesquisarVagas></PesquisarVagas>
      </div>
    </div>
    <h2>Template customizado</h2>
    <ListaVagas v-slot:default="slotProps">
      <div v-for="(vaga, index) in slotProps.vagas" :key="index">
        <h4>{{ vaga.titulo }}</h4>
        <p>{{ vaga.descricao }}</p>
        <hr />
      </div>
    </ListaVagas>
    <br />
    <h2>Template Padrão</h2>
    <ListaVagas></ListaVagas>

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
