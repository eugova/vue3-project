<template>
<div id="app">
<Header />
<ContentView />
<Footer />
</div>

</template>

<script setup>
// Импортируем компоненты Header и Footer
import Header from './components/Header.vue';
import Footer from './components/Footer.vue';
import ContentView from './views/ContentView.vue';
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
