<template>
  <div class="row mt-5" v-for="(vaga, index) in vagas" :key="index">
    <div class="col">
      <VagaComponent v-bind="vaga" />
    </div>
  </div>
</template>

<script>
import VagaComponent from "../comuns/VagaComponent.vue";

export default {
  name: "ListaVagas",
  components: {
    VagaComponent,
  },
  data() {
    return {
      vagas: [],
    };
  },
  activated() {
    this.vagas = JSON.parse(localStorage.getItem("vagas"));
  },
  mounted() {
    this.emitter.on("filtrarVagas", (titulo) => {
      this.vagas = JSON.parse(localStorage.getItem("vagas"));
      this.vagas = this.vagas.filter((vaga) => {
        return vaga.titulo.toLowerCase().includes(titulo.toLowerCase());
      });
    });
  },
};
</script>
