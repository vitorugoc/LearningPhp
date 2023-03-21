<template>
  <div class="card">
    <div class="card-header bg-dark text-white">{{ titulo }}</div>
    <div class="card-body">
      <p>{{ descricao }}</p>
    </div>
    <div class="card-footer">
      <small class="text-muted"
        >Salário: {{ salario }} | Modalidade: {{ modalidade }} | Tipo: {{ tipo }} |
        Publicação: {{ publicacao }}</small
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
};
</script>
