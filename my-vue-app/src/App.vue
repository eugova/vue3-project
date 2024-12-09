<template>
<div id="app">
<Header />
<HomeView />
<AboutView />
<MenuView />
<DishesView />
<Footer />
</div>

</template>

<script setup>
// Импортируем компоненты Header и Footer
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
import HomeView from './views/HomeView.vue';
import AboutView from './views/AboutView.vue';
import MenuView from './views/MenuView.vue';
import DishesView from './views/DishesView.vue';
</script>

<style scoped>

#app {
display:flex;
flex-direction:column; /* Вертикальная компоновка */
min-height:100vh; /* Минимальная высота экрана */
}

footer {
margin-top:auto; /* Прижимает футер к низу страницы */
}
</style>
