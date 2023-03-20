<template>
  <div>
    <h1>Componente Home</h1>
  </div>
</template>

<script>
export default {
  name: "HomeView",
  activated(){
    console.log('Componente é ativado')
  },
  deactivated(){
    console.log('Componente é desativadp')
  },
  beforeUnmount(){
    console.log('Antes de desmontar')
  },
  unmounted(){
    console.log('Desmontado')
  }
};
</script>

<style scoped>
</style>
