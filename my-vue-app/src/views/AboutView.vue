<template>
  <div id="about" class="section">
    <h2>О нас</h2>
    <p>Мы — современный ресторан, предлагающий лучшие блюда местной кухни.</p>
    <p>Наша команда профессионалов готова предложить вам незабываемый опыт.</p>
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
    padding:40px;
}

.btn {
    display:inline-block;
}
</style>