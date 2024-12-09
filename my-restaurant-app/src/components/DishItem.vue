<template>
    <li>
      {{ dish.name }}: {{ dish.description }} - {{ dish.price }}₽
      <button @click="remove">Удалить</button>
    </li>
  </template>
  
  <script setup>
  import { defineProps, defineEmits } from 'vue';
  
  const props = defineProps(['dish']);
  const emit = defineEmits();
  
  const remove = () => {
    emit('delete', props.dish.id);
  };
  </script>
  
  <style scoped>
  li {
    margin: 5px 0;
  }
  button {
    margin-left: 10px;
  }
  </style>