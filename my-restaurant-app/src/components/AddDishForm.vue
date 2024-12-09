<template>
    <div class="add-dish-form">
      <h2>Добавить новое блюдо</h2>
      <form @submit.prevent="addDish">
        <input type="text" v-model="newDish.name" placeholder="Название блюда" required />
        <input type="number" v-model="newDish.price" placeholder="Цена" required />
        <button type="submit">Добавить блюдо</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  const newDish = ref({
    name: '',
    price: null,
  });
  
  // Функция для добавления нового блюда (пока просто выводим в консоль)
  const addDish = () => {
    console.log('Добавлено новое блюдо:', newDish.value);
    
    // Здесь можно добавить логику для обновления списка блюд
  };
  </script>
  
  <style scoped>
  .add-dish-form {
    margin-bottom: 20px;
  }
  .add-dish-form input {
    margin-right: 10px;
  }
  </style>