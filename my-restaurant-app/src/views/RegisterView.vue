<template>
  <div class="register-container">
    <h2 style="text-align: center;">Регистрация</h2>
    <form @submit.prevent="handleRegister">
      <div class="form-group">
        <label for="username">Имя пользователя:</label>
        <input
          type="text"
          id="username"
          v-model="username"
          required
          placeholder="Введите имя пользователя"
        />
      </div>
      <div class="form-group">
        <label for="email">Электронная почта:</label>
        <input
          type="email"
          id="email"
          v-model="email"
          required
          placeholder="Введите электронную почту"
        />
      </div>
      <div class="form-group">
        <label for="password">Пароль:</label>
        <input
          type="password"
          id="password"
          v-model="password"
          required
          placeholder="Введите пароль"
        />
      </div>
      <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
      <p v-if="errorMessage" class="error">{{ errorMessage }}</p>
      <p v-if="successMessage" class="success">{{ successMessage }}</p>
    </form>
    <Router-link to="/" class="btn btn-light login-button">Уже есть аккаунт? Войти</Router-link>
  </div>
</template>

<script setup>
import { ref } from 'vue';

const username = ref('');
const email = ref('');
const password = ref('');
const errorMessage = ref('');
const successMessage = ref('');

const handleRegister = async () => {
  // Здесь вы можете добавить логику для регистрации пользователя
  // Например, отправка запроса на сервер

  // Пример успешной регистрации (замените на вашу логику)
  if (username.value && email.value && password.value) {
    successMessage.value = 'Регистрация прошла успешно! Пожалуйста, войдите в систему.';
    errorMessage.value = ''; // Очистка сообщения об ошибке
    // Можно перенаправить на страницу входа или выполнить другие действия
  } else {
    errorMessage.value = 'Пожалуйста, заполните все поля.';
    successMessage.value = ''; // Очистка сообщения об успехе
  }
};
</script>

<style scoped>
.register-container {
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
}
.error {
   color: red;
}
.success {
   color: green; 
}
.login-button {
   display:block; /* Обеспечиваем, что кнопка занимает всю ширину */
   margin-top:10px; /* Отступ сверху */
}
</style>
