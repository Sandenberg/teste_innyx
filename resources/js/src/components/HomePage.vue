<template>
    <div>
      <h1>Bem-vindo à Loja de Produtos</h1>
      
      <ProductList />
      
      <ProductDetail :produto="produtoSelecionado" v-if="produtoSelecionado" />
   
      <ProductForm :modo="modoForm" :produto="produtoSelecionado" />
    </div>
  </template>
  
  <script>
  import ProductList from './ProductList.vue';
  import ProductDetail from './ProductDetail.vue';
  import ProductForm from './ProductForm.vue';
  
  export default {
    name: 'HomePage',
    components: {
      ProductList,
      ProductDetail,
      ProductForm
    },
    data() {
      return {
        produtoSelecionado: null,
        modoForm: 'Criar'
      };
    }
  }
  </script>
  
  <style scoped>
 
  </style>
  