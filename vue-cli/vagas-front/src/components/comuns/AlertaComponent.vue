<template>
  <div class="alert alert-success" role="alert">
    <slot name="titulo"></slot>
    <hr />
    <slot name="descricao"></slot>
  </div>
</template>

<script>
export default {
  name: "AlertaComponent",
};
</script>
