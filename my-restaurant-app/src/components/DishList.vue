<template>
    <div class="dish-list">
      <h2>Список блюд</h2>
      <ul>
        <li v-for="dish in dishes" :key="dish.id">
          {{ dish.name }} - {{ dish.price }} руб.
        </li>
      </ul>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  
  // Здесь мы создаем локальный массив блюд
  const dishes = ref([
    { id: 1, name: 'Паста Альфредо', price: 450 },
    { id: 2, name: 'Салат Цезарь', price: 350 },
    { id: 3, name: 'Пицца Маргарита', price: 500 },
  ]);
  </script>
  
  <style scoped>
  .dish-list {
    margin-bottom: 20px;
  }
  </style>