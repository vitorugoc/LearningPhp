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
  props: {
    vagas: {
      type: Array,
    },
  },
};
</script>
