<template>
    <div>
      <h2>Список блюд</h2>
      <ul>
        <DishItem v-for="dish in dishes" :key="dish.id" :dish="dish" @delete="deleteDish"/>
      </ul>
      <DishForm @add="addDish"/>
    </div>
  </template>
  
  <script setup>
  import { ref, onMounted } from 'vue';
  import axios from 'axios';
  import DishItem from './DishItem.vue';
  import DishForm from './DishForm.vue';
  
  const dishes = ref([]);
  
  // Получение всех блюд из API
  const fetchDishes = async () => {
    const response = await axios.get('http://localhost/api.php');
    dishes.value = response.data;
  };
  
  // Добавление нового блюда
  const addDish = async (newDish) => {
    const response = await axios.post('http://localhost/api.php', newDish);
    dishes.value.push(response.data);
  };
  
  // Удаление блюда по ID
  const deleteDish = async (dishId) => {
    await axios.delete(`http://localhost/api.php?id=${dishId}`);
    dishes.value = dishes.value.filter(dish => dish.id !== dishId);
  };
  
  // Загрузка данных при монтировании компонента
  onMounted(fetchDishes);
  </script>
  
  <style scoped>
  ul {
    list-style-type: none;
  }
  </style>