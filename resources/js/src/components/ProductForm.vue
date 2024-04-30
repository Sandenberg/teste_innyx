<template>
    <div>
      <h1>{{ modo }}</h1>
      <form @submit.prevent="submitForm">
        <div>
          <label for="nome">Nome:</label>
          <input type="text" id="nome" v-model="form.nome" required>
        </div>
        <div>
          <label for="descricao">Descrição:</label>
          <textarea id="descricao" v-model="form.descricao" required></textarea>
        </div>
        <div>
          <label for="preco">Preço:</label>
          <input type="number" id="preco" v-model="form.preco" required>
        </div>
       <button type="submit">{{ modo }}</button>
      </form>
    </div>
  </template>
  
  <script>
  
  import axios from 'axios';

export default {
    import { required } from 'vuelidate/lib/validators';
    
  name: 'ProductForm',
  props: {
    modo: String,
    produto: Object
  },
  data() {
    return {
      form: {
        nome: this.produto ? this.produto.nome : '',
        descricao: this.produto ? this.produto.descricao : '',
        preco: this.produto ? this.produto.preco : '',
        // Adicione mais campos conforme necessário
      }
    };
  },
  validations: {
    nome: { required },
    preco: { required }
  },
  methods: {
    submitForm() {
      if (this.modo === 'Criar') {
        axios.post('/api/produtos', this.form)
          .then(response => {
            console.log('Produto criado com sucesso:', response.data);
            // Lógica para redirecionar ou atualizar a lista de produtos
          })
          .catch(error => {
            console.error('Erro ao criar o produto:', error);
          });
      } else if (this.modo === 'Editar') {
        axios.put(`/api/produtos/${this.produto.id}`, this.form)
          .then(response => {
            console.log('Produto atualizado com sucesso:', response.data);
            // Lógica para redirecionar ou atualizar a lista de produtos
          })
          .catch(error => {
            console.error('Erro ao atualizar o produto:', error);
          });
      }
    }
  }
  criarCategoria() {
    axios.post('/api/categorias', this.novaCategoria)
      .then(response => {
        console.log('Categoria criada com sucesso:', response.data);
        // Atualizar a lista de categorias após a criação
        this.listarCategorias();
      })
      .catch(error => {
        console.error('Erro ao criar a categoria:', error);
      });
  }
}
  <script>

  