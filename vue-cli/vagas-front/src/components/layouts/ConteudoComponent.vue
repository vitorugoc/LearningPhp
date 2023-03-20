<template>
  <div>
    <h1>Componente Conteúdo</h1>
    <p>Conteudo - Propriedade $style: {{ $style }}</p>
    <div :class="$style['teste-1']">
      Class teste-1
    </div>
    <div :id="$style['teste-2']">
      Id teste-2
    </div>
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

<style module>
.teste-1{
  background-color: red;
}
#teste-2{
  background-color: yellow;
}
</style>
