<template>
<div id="dishes" class="section">
<h2>Наши блюда</h2>
<p>Здесь вы можете найти информацию о наших популярных блюдах.</p>

<!-- Пример списка блюд -->
<ul class="list-group">
<li class="list-group-item">Паста Альфредо - Нежная паста с кремовым соусом.</li>
<li class="list-group-item">Салат Цезарь - Классический салат с курицей и пармезаном.</li>
<li class="list-group-item">Пицца Маргарита - Пицца с томатным соусом и моцареллой.</li>
<li class="list-group-item">Стейк - Сочный стейк на гриле с гарниром.</li>
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
