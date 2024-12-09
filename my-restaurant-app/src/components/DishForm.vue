<template>
    <form @submit.prevent="submit">
      <input v-model="name" placeholder="Название блюда" required />
      <input v-model="description" placeholder="Описание" required />
      <input type="number" v-model="price" placeholder="Цена" step="0.01" required />
      <button type="submit">Добавить блюдо</button>
    </form>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { defineEmits } from 'vue';
  
  const emit = defineEmits();
  const name = ref('');
  const description = ref('');
  const price = ref('');
  
  const submit = () => {
    const newDish = { name: name.value, description: description.value, price: parseFloat(price.value) };
    emit('add', newDish);
    
    // Очистка полей после отправки
    name.value = '';
    description.value = '';
    price.value = '';
  };
  </script>
  
  <style scoped>
  form {
    margin-bottom: 20px;
  }
  input {
    margin-right: 10px;
  }
  </style>