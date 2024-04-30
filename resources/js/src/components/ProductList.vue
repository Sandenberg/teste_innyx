<template>
    <div>
      <h1>Lista de Produtos</h1>
      <ul>
        <li v-for="produto in produtos" :key="produto.id">
          {{ produto.nome }} - {{ produto.preco }}
        </li>
      </ul>
    </div>
  </template>
  
  // Exemplo de componente Vue.js para listar produtos e categorias
  <script>
  import axios from 'axios';
  
  export default {
    name: 'ProductList',
    data() {
      return {
        produtos: [],
        categorias: []
      };
    },
    created() {
      this.listarProdutos();
      this.listarCategorias();
    },
    methods: {
      listarProdutos() {
        axios.get('/api/produtos')
          .then(response => {
            this.produtos = response.data;
          })
          .catch(error => {
            console.error('Erro ao buscar os produtos:', error);
          });
      },
      listarCategorias() {
        axios.get('/api/categorias')
          .then(response => {
            this.categorias = response.data;
          })
          .catch(error => {
            console.error('Erro ao buscar as categorias:', error);
          });
      }
    }
  }
  
  </script>
  

  