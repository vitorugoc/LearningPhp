<template>
  <div class="card">
    <div class="card-header bg-dark text-white">
      <div class="row">
        <div class="col d-flex justify-content-between">
          <div>
            {{ titulo }}
          </div>
          <div>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input" />
              <label class="form-check-label">Favoritar</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <p>{{ descricao }}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"
        >Salário: {{ salario }} | Modalidade: {{ getModalidade }} | Tipo: {{ getTipo }} |
        Publicação: {{ getPublicacao }}</small
      >
    </div>
  </div>
</template>
<script>
export default {
  name: "VagaComponent",
  props: {
    titulo: {
      type: String,
      required: true,
      validator(p) {
        return p.length > 3 ? true : false;
      },
    },
    descricao: {
      type: String,
      required: true,
      default: "O contratante não adicionou uma descrição para essa vaga",
    },
    salario: {
      type: [Number, String],
      required: true,
    },
    modalidade: {
      type: String,
      required: true,
    },
    tipo: {
      type: String,
      required: true,
    },
    publicacao: {
      type: String,
      required: true,
    },
  },
  computed: {
    getModalidade() {
      switch (this.modalidade) {
        case "1":
          return "Home Office";
        case "2":
          return "Presencial";
      }
      return "";
    },
    getTipo() {
      switch (this.tipo) {
        case "1":
          return "CLT";
        case "2":
          return "PJ";
      }
      return "";
    },
    getPublicacao() {
      let data = new Date(this.publicacao).toLocaleString("pt-BR");
      return data.toLocaleString("pt-BR");
    },
  },
};
</script>
