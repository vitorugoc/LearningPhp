<template>
  <div class="container py-4">
    <div class="row">
      <div class="col">
        <h4>Apresente a sua vaga para milhares de profissionais e de graça</h4>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        <label class="form-label">Titulo da Vaga</label>
        <input type="text" class="form-control" v-model="titulo" />
        <div class="form-text">Por exemplo: Programador JavaScript e VueJS</div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        <label class="form-label">Descrição</label>
        <textarea type="text" class="form-control" v-model="descricao" />
        <div class="form-text">Informe os detalhes da vaga.</div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        <label class="form-label">Salário</label>
        <input type="number" class="form-control" v-model="salario" />
        <div class="form-text">Informe o Salário</div>
      </div>

      <div class="col">
        <label class="form-label">Modalidade</label>
        <select type="text" class="form-select" v-model="modalidade">
          <option value="" disabled>---- Selecione ----</option>
          <option value="1">Home Office</option>
          <option value="2">Presencial</option>
        </select>
        <div class="form-text">Informe onde as atividades serão realizadas.</div>
      </div>

      <div class="col">
        <label class="form-label">Tipo</label>
        <select type="text" class="form-select" v-model="tipo">
          <option value="" disabled>---- Selecione ----</option>
          <option value="1">CLT</option>
          <option value="2">PJ</option>
        </select>
        <div class="form-text">Informe o tipo de contratação.</div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col">
        <button @click="salvarVaga()" type="submit" class="btn btn-primary">
          Cadastrar
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PublicarVagaView",
  data: () => ({
    titulo: "",
    descricao: "",
    salario: "",
    modalidade: "",
    tipo: "",
  }),
  methods: {
    salvarVaga() {
      let tempoDecorrido = Date.now();
      let dataAtual = new Date(tempoDecorrido);
      let dataPublicacao = dataAtual.toISOString();
      let vagas = JSON.parse(localStorage.getItem("vagas"));

      if (!vagas) vagas = [];

      vagas.push({
        titulo: this.titulo,
        descricao: this.descricao,
        salario: this.salario,
        modalidade: this.modalidade,
        tipo: this.tipo,
        publicacao: dataPublicacao,
      });
      if (this.validaFormulario()) {
        localStorage.setItem("vagas", JSON.stringify(vagas));
        this.emitter.emit("alerta", {
          tipo: "sucesso",
          titulo: `A vaga ${this.titulo} foi cadastrada com sucesso!`,
          descricao: `Parabéns, a vaga foi cadastrada e poderá ser consultada por milhares de profissionais em nossa plataforma.`,
        });

        this.resetaFormularioCadastroVaga();
      } else {
        this.emitter.emit("alerta", {
          tipo: "erro",
          titulo: `Por favor, preencha todos os campos!`,
          descricao: `Parece que você esqueceu de preencher todos os campos. Favor verificar e tentar novamente.`,
        });
      }
    },
    resetaFormularioCadastroVaga() {
      this.titulo = "";
      this.descricao = "";
      this.salario = "";
      this.modalidade = "";
      this.tipo = "";
    },
    validaFormulario() {
      return (
        this.titulo && this.descricao && this.salario && this.modalidade && this.tipo
      );
    },
  },
};
</script>

<style></style>
