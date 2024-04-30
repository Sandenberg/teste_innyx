<template>
    <div v-if="produto">
      <h1>Detalhes do Produto</h1>
      <p><strong>Nome:</strong> {{ produto.nome }}</p>
      <p><strong>Descrição:</strong> {{ produto.descricao }}</p>
      <p><strong>Preço:</strong> {{ produto.preco }}</p>
      <img :src="'/produtos/imagem/' + produto.imagem" alt="Imagem do Produto">
    </div>
    <div v-else>
      <p>Carregando...</p>
    </div>
  </template>
  
  <script>
import axios from 'axios';

export default {
  name: 'ProductDetail',
  props: {
    produtoId: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      produto: null
    };
  },
  created() {
    this.fetchProduto();
  },
  methods: {
    fetchProduto() {
      axios.get(`/api/produtos/${this.produtoId}`)
        .then(response => {
          this.produto = response.data;
        })
        .catch(error => {
          console.error('Erro ao buscar os detalhes do produto:', error);
        });
    }
  }
}
</script>

  