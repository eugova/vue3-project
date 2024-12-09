<template>
    <nav class="menu">
      <ul>
        <li><a href="#home">Главная</a></li>
        <li><a href="#about">О нас</a></li>
        <li><a href="#menu">Меню</a></li>
        <li><a href="#contact">Контакты</a></li>
      </ul>
    </nav>
  </template>
  
  <script setup>
  // Здесь можно добавить дополнительные функции в будущем
  </script>
  
  <style scoped>
  .menu {
    background-color: #343a40;
  }
  
  .menu ul {
    list-style-type: none;
    padding: 0;
  }
  
  .menu li {
    display: inline;
    margin-right: 20px;
  }
  
  .menu a {
    color: white;
    text-decoration: none;
  }
  </style>