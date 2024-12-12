
<template>
  <div class="login-container">
    <h2 style="text-align: center;">Авторизация</h2>
    <form @submit.prevent="handleLogin">
      <div class="form-group">
        <label for="username">Username:</label>
        <input
          type="text"
          id="username"
          v-model="username"
          required
          placeholder="Введите имя пользователя"
        />
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input
          type="password"
          id="password"
          v-model="password"
          required
          placeholder="Введите пароль"
        />
      </div>
      <button class="btn btn-success" type="submit">Войти</button>
      <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
    </form>
    <p>Нет аккаунта? <router-link to="/register">Зарегистрируйтесь здесь</router-link></p>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import axios from 'axios';
import { useRouter } from 'vue-router';

const username = ref('');
const password = ref('');
const errorMessage = ref('');
const router = useRouter();

const login = async () => {
  try {
    const response = await axios.post('http://localhost/test/login.php', {
      username: username.value,
      password: password.value,
    });

    if (response.data.success) {
      // Успешный вход, перенаправление на MenuView.vue
      router.push({ name: 'MenuView' });
    } else {
      // Вывод сообщения об ошибке
      errorMessage.value = response.data.message;
    }
  } catch (error) {
    console.error('Ошибка при входе:', error);
    errorMessage.value = 'Произошла ошибка при входе.';
  }
};
</script>

<style scoped>
.login-container {
  max-width: 400px;
  margin: auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-group {
  margin-bottom: 15px;
}

input {
  width: 100%;
  padding: 10px;
}

button {
  width: 100%;
  padding: 10px;
}

.error {
  color: red;
}

.register-button {
  display: block; /* Обеспечиваем, что кнопка занимает всю ширину */
  margin-top: 10px; /* Отступ сверху */
}
</style>
