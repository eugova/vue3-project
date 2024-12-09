<template>
    <div id="app">
      <Header />
      <Menu />
      <DishList />
      <AddDishForm />
      <Footer />
    </div>
  </template>
  
  <script setup>
  import Header from '../components/Header.vue'
  import Menu from '../components/Menu.vue'
  import AddDishForm from '../components/AddDishForm.vue'
  import DishList from '../components/DishList.vue'
  import Footer from '../components/Footer.vue'
  </script>
  
  <style scoped>
  #app {
    display: flex;
    flex-direction: column;
  }
  </style>