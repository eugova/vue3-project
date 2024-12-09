<template>
<div id="menu" class="section">
<h2>Меню</h2>
<ul class="list-group">
<li class="list-group-item">Паста Альфредо - 450 руб.</li>
<li class="list-group-item">Салат Цезарь - 350 руб.</li>
<li class="list-group-item">Пицца Маргарита - 500 руб.</li>
<li class="list-group-item">Стейк - 800 руб.</li>
</ul>

<button @click.prevent="scrollTo('home')" class="btn">Вернуться на главную</button>

</div>

</template>

<script setup>
// Импортируем функцию scrollTo для навигации
const scrollTo = (section) => {
    const element = document.getElementById(section);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
};
</script>

<style scoped>

.section {
padding-top:40px;

}

.list-group-item {
background-color:#f8e1d4; /* Бежевый фон для элементов меню */
}

.btn {
display:inline-block;

}
</style>
