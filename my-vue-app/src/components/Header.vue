<template>
  <header class="header">
    <h1>Ресторан</h1>
    <nav>
      <ul class="nav">
        <li><a @click.prevent="scrollTo('home')">Главная</a></li>
        <li><a @click.prevent="scrollTo('about')">О нас</a></li>
        <li><a @click.prevent="scrollTo('menu')">Меню</a></li>
        <li><a @click.prevent="scrollTo('dishes')">Блюда</a></li>
      </ul>
    </nav>
  </header>
</template>

<script setup>
const scrollTo = (section) => {
  const element = document.getElementById(section);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
  }
};
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