<template>
  <div id="home" class="section">
    <h2>Добро пожаловать в наш ресторан!</h2>
    <p>Мы рады видеть вас здесь. Наслаждайтесь нашим меню и атмосферой.</p>
    <router-link to="/menu" class="btn">Посмотреть меню</router-link>
  </div>
</template>

<style scoped>
.section {
  padding: 40px;
}

.btn {
  display: inline-block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #d63384; /* Розовый цвет */
  color: white;
  border-radius: 5px;
}

.btn:hover {
  background-color: #c8237a; /* Темнее при наведении */
}
</style>