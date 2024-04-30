<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Configuração e Execução do Projeto
Este guia fornece instruções passo a passo para configurar e executar o projeto, incluindo a configuração do ambiente de desenvolvimento, a instalação de dependências e a execução do aplicativo.

## 1. Configuração do Ambiente de Desenvolvimento
Certifique-se de ter o PHP (8.0 ou superior), Composer, Node.js, npm e um servidor MySQL (8.0 ou superior) instalados em sua máquina.

PHP: [Site Oficial do PHP](https://www.php.net/downloads)
Composer: [Site Oficial do Composer](https://getcomposer.org/)
Node.js: [Site Oficial do Node.js](https://nodejs.org/en)
MySQL Community Server: [MySQL Community Server](https://www.mysql.com/)

## 2. Clonando o Repositório
Clone o repositório do projeto em sua máquina local usando o Git:

```bash
    $ git clone https://github.com/seu-usuario/nome-do-repositorio.git
```

## 3. Configuração do Projeto Laravel

Navegue até o diretório do projeto Laravel clonado e siga as instruções abaixo:

Faça uma cópia do arquivo .env.example e renomeie-a para .env:

```bash
    cp .env.example .env
```
Configure as informações do banco de dados no arquivo .env de acordo com suas configurações locais.
Gere a chave de aplicativo do Laravel:

```bash
    php artisan key:generate
```

Execute as migrações do banco de dados:

```bash
    php artisan migrate
```

## 4. Configuração do Projeto Vue.js
Navegue até o diretório do projeto Vue.js dentro do projeto Laravel e execute os seguintes comandos:

```bash
    cd resources/js
    npm install
```

## 5. Execução do Projeto
Inicie o servidor Laravel e o servidor de desenvolvimento Vue.js para executar o aplicativo:

Inicie o servidor Laravel:

```bash
    php artisan serve
```

Inicie o servidor de desenvolvimento Vue.js:
```bash
    cd resources/js
    npm run serve
```


## 6. Acesso ao Aplicativo
Após iniciar os servidores Laravel e Vue.js, acesse o aplicativo em seu navegador da web em http://localhost:8080.

