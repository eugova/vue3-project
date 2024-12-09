<template>
  <form @submit.prevent="submit">
    <input v-model="name" placeholder="Название блюда" required />
    <input v-model="description" placeholder="Описание" required />
    <input type="number" v-model="price" placeholder="Цена" step="0.01" required />
    <button type="submit">Добавить блюдо</button>
  </form>
</template>

<script setup>
import { ref, onMounted } from 'vue';

// Реактивные переменные
const name = ref('');
const description = ref('');
const price = ref('');

// Метод для отправки данных о новом блюде
const submit = async () => {
  const newDish = { name: name.value, description: description.value, price: parseFloat(price.value) };
  // Эмитируем событие добавления нового блюда
  emit('add', newDish);
  // Очистка полей после отправки
  name.value = '';
  description.value = '';
  price.value = '';
};

// Метод, который будет выполнен при монтировании компонента
onMounted(() => {
  console.log('Компонент DishForm смонтирован');
  // Здесь можно выполнять действия при монтировании компонента
});
</script>
