<template>
  <header class="header">
    <h1>Ресторан</h1>
  </header>
</template>

<script setup>

</script>

<style scoped>
.header {
  background-color: #f9f9f9; /* Светлый фон */
  padding: 20px;
  text-align: center; /* Центрируем заголовок */
}

.nav {
  list-style-type: none;
  padding: 0;
  display: flex; /* Используем Flexbox для центрирования */
  justify-content: center; /* Центрируем элементы по горизонтали */
}

.nav li {
  margin: 0 15px; /* Отступы между элементами навигации */
}

.nav a {
  text-decoration: none;
  color: #d63384; /* Розовый цвет */
}

.nav a:hover {
  text-decoration: underline; /* Подчеркивание при наведении */
}
</style>