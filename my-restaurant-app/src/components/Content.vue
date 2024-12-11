<template>
  <section class="menu">
  <h2 style="text-align: center;">Меню</h2>
  <div class="container">
    <div class="card mx-auto" style="max-width: 800px;">
      <div class="card-body">
        <div class="button-container">
          <button type="button" class="btn btn-outline-dark" @click="openModal">Добавить блюдо</button>
        </div>
        <div class="card-container">
          <div class="card dish-card" v-for="(dish, index) in dishes" :key="index">
            <h3>{{ dish.name }}</h3>
            <p>{{ dish.description }}</p>
            <p class="price">Цена: {{ dish.price }} ₽</p>
            <button type="button" class="btn btn-outline-dark" @click="editDish(index)">Изменить</button>
            <button type="button" class="btn btn-outline-dark" @click="deleteDish(index)">Удалить</button>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div v-if="isModalOpen" class="modal">
      <div class = "modal-content">
        <span class="close" @click="closeModal">&times;</span>
        <h3>{{ isEditing ? 'Изменить Блюдо' : 'Добавить Блюдо' }}</h3>
        <input class="form-control" v-model="currentDish.name" placeholder="Название блюда" />
        <textarea class="form-control" v-model="currentDish.description" placeholder="Описание блюда"></textarea>
        <input class="form-control" v-model.number="currentDish.price" type="number" placeholder="Цена" />
        <button type="button" class="btn btn-outline-dark" @click="saveDish">{{ isEditing ? 'Сохранить' : 'Добавить' }}</button>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue';

const dishes = ref([]); // Массив блюд
const isModalOpen = ref(false); // Состояние модального окна
const isEditing = ref(false); // Состояние редактирования
const currentDish = ref({ name: '', description: '', price: null }); // Текущие данные блюда

// Функция для открытия модального окна
function openModal() {
  currentDish.value = { name: '', description: '', price: null }; // Сброс данных
  isEditing.value = false; // Установить режим добавления
  isModalOpen.value = true; // Открыть модальное окно
}

// Функция для закрытия модального окна
function closeModal() {
  isModalOpen.value = false; // Закрыть модальное окно
}

// Функция для сохранения блюда (добавление или изменение)
function saveDish() {
  if (isEditing.value) {
    const index = dishes.value.findIndex(dish => dish.name === currentDish.value.name);
    if (index !== -1) {
      dishes.value[index] = { ...currentDish.value }; // Обновляем блюдо
    }
  } else {
    dishes.value.push({ ...currentDish.value });
  }
  closeModal(); // Закрыть модальное окно после сохранения
}

// Функция для редактирования блюда
function editDish(index) {
  currentDish.value = { ...dishes.value[index] }; // Заполнение текущими данными
  isEditing.value = true; // Установить режим редактирования
  isModalOpen.value = true; // Открыть модальное окно
}

// Функция для удаления блюда
function deleteDish(index) {
  dishes.value.splice(index, 1); // Удаление блюда из массива
}
</script>

<style scoped>
.menu {
  padding: 20px;
}

.card {
  border: 1px solid #ccc; /* Рамка для карточки */
  border-radius: 8px; /* Закругленные углы */
}

.button-container {
  display: flex;
  justify-content: flex-end; /* Выравнивание кнопки вправо */
  margin-bottom: 20px; /* Отступ снизу для отделения от списка блюд */
}

.card-container {
  display: flex;
  flex-wrap: wrap; /* Позволяет карточкам переходить на новую строку */
  gap: 20px; /* Промежуток между карточками */
  
  max-height: none; /* Убираем ограничение высоты для контейнера */
}

.dish-card {
  background-color: #f9f9f9; /* Светлый фон для карточек блюд */
  border-radius: 8px;
  padding: 15px;
  width: 200px; /* Три карточки в ряд с учетом промежутков */
  
  min-height: 150px; /* Минимальная высота каждой карточки */
}

.dish-card h3 {
  margin-top: 0;
}

.price {
  font-weight: bold;
}

button {
  margin-top: 10px;
}

/* Стили для модального окна */
.modal {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal-content {
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  width: auto; /* Автоматическая ширина модального окна */
}

.close {
  cursor: pointer;
}
</style>
