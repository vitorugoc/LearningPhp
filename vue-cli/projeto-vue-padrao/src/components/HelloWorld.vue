<template>
  <div class="hello">
    <h1 class="vermelho">Componente Vue JS {{ variavel }}</h1>
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      variavel: process.env.VUE_APP_MINHA_VARIAVEL_DE_AMBIENTE,
    };
  },
  computed: {
    nomeCompleto() {
      return this.nome + " " + this.sobrenome;
    },
  },
  name: "HelloWorld",
};
</script>

<style>
.vermelho {
  color: red;
}
</style>
