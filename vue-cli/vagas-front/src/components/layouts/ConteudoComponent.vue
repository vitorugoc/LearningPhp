<template>
  <div>
    <h1>{{ titulo }}</h1>
    <button @click="atualizarComponente()">Atualizar</button>
    <button @click="conteudo = 'home-view'">Home</button>
    <button @click="conteudo = 'publicar-vaga-view'">Publicar Vaga</button>
    <!-- <home-view />
    <publicar-vaga-view /> -->
    <component :is="conteudo" />
  </div>
</template>

<script>
import HomeView from '../views/HomeView.vue'
import PublicarVagaView from '../views/PublicarVagaView.vue'
export default {
  name: "ConteudoComponent",
  data: () => ({
    teste: 'O  componente foi criado',
    titulo: 'Componente Conteudo',
    conteudo: ''
  }),
  methods: {
    atualizarComponente() {
      this.titulo += "*";
    }
  },
  components: {
    HomeView: HomeView,
    PublicarVagaView: PublicarVagaView

  },
  beforeCreate(){
    console.log('Antes de criar', this.teste)
  },
  created(){
    console.log('Criado', this.teste)
  },

  beforeMount(){
    console.log("Antes de montar o template")
  },
  mounted(){
    console.log('Montado')
  },
      
  beforeUpdate(){
    console.log('Antes de atualizar')
  },
  updated(){
    console.log('Atualizado')
  },
  beforeUnmount(){
    console.log('Antes de desmontar')
  },
  unmounted(){
    console.log('Desmontado')
  },
    /*
  errorCaptured(){
    console.log('Erro capturado')
  },
  renderTracked(){
    console.log('Re-renderização rastreada')
  },
  renderTriggered(){
    console.log('Re-renderizaçao acionada')
  },
  activated(){
    console.log('Componente é ativado')
  },
  deactivated(){
    console.log('Componente desativado')
  }
  */
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
