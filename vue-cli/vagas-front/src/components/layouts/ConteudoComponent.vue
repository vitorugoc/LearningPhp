<template>
  <div>
    <p>Conteúdo</p>
    <home-view />
    <publicar-vaga-view />
  </div>
</template>

<script>
import HomeView from '../views/HomeView.vue'
import PublicarVagaView from '../views/PublicarVagaView.vue'
export default {
  name: "ConteudoComponent",
  components: {
    HomeView: HomeView,
    PublicarVagaView: PublicarVagaView

  }
}
</script>

<style></style>
