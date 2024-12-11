<template>
    <div>
      <h1>Меню Блюд</h1>
      <ul>
        <li v-for="dish in dishes" :key="dish.id">
          <h2>{{ dish.name }}</h2>
          <p>{{ dish.description }}</p>
          <p>Цена: {{ dish.price }}</p>
          <button @click="deleteDish(dish.id)">Удалить</button>
        </li>
      </ul>
    </div>
  </template>
  
  <script setup>
  // import { ref, onMounted } from 'vue';
  
  // const dishes = ref([]);
  
  // // Функция для загрузки блюд
  // const loadDishes = async () => {
  //   try {
  //     const response = await fetch("http://yugova.vyatgeo.ru/index1.php");
  //     if (!response.ok) {
  //       throw new Error('Ошибка при загрузке блюд');
  //     }
  //     dishes.value = await response.json();
  //   } catch (error) {
  //     console.error(error);
  //   }
  // };
  
  // // Функция для удаления блюда
  // const deleteDish = async (id) => {
  //   try {
  //     const response = await fetch(`http://yugova.vyatgeo.ru/index1.php`, {
  //       method: 'DELETE',
  //       body: new URLSearchParams({ id }).toString(),
  //     });
  //     const data = await response.json();
      
  //     if (data.success) {
  //       dishes.value = dishes.value.filter(dish => dish.id !== id);
  //       alert('Блюдо удалено');
  //     } else {
  //       alert('Ошибка при удалении блюда');
  //     }
  //   } catch (error) {
  //     console.error('Ошибка при удалении блюда:', error);
  //   }
  // };
  
  // onMounted(loadDishes);
  </script>
  
  <style scoped>
  ul {
    list-style-type: none;
    padding: 0;
  }
  
  li {
    margin-bottom: 20px;
  }
  
  button {
    margin-top: 10px;
  }
  </style>