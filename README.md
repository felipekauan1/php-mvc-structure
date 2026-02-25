# 🚀 PHP MVC Structure - Arquitetura MVC com PSR-4

Este repositório contém uma aplicação estruturada no padrão **MVC (Model-View-Controller)** desenvolvida com **PHP puro**. O foco do projeto é o aprendizado avançado de arquitetura de software, organização de código e aplicação de boas práticas modernas como **PSR-4, Composer e Design Patterns**.

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP 8+.
* **Gerenciador de Dependências:** Composer.
* **Banco de Dados:** MySQL.
* **Padronização:** PSR-4 (Autoload).
* **Persistência:** PDO (PHP Data Objects).
* **Design Pattern:** Singleton (Conexão única com o banco).

## 📋 Funcionalidades

* **Arquitetura MVC:** Separação clara de responsabilidades entre Model, View e Controller.
* **Conexão Segura:** Classe `Database` utilizando Singleton e Prepared Statements para evitar SQL Injection.
* **Autoload PSR-4:** Carregamento automático de todas as classes via Composer, eliminando múltiplos `require`.
* **Model Base:** Abstração da camada de dados para facilitar operações de banco em qualquer Model.
* **Helpers Globais:** Funções auxiliares como `dd()` para debug e `config()` para acesso a parâmetros do sistema.
* **Configuração Desacoplada:** Sistema centralizado para gerenciar credenciais de banco e variáveis de ambiente.
* **Commits Semânticos:** Histórico de evolução do projeto organizado por padrões (feat, refactor, fix, chore).

## 📁 Estrutura de Arquivos Principal

* `app/core/`: O "coração" do sistema (Router, Controller, Model, Database).
* `app/config/`: Arquivos de configuração e credenciais.
* `app/controllers/`: Lógica de controle e recepção de requisições.
* `app/models/`: Classes de abstração e manipulação de dados.
* `app/views/`: Camada de apresentação visual.
* `public/index.php`: Único ponto de entrada da aplicação.

## 🚀 Como Instalar e Rodar

1. **Clone o repositório:**
```bash
git clone https://github.com/felipekauan1/php-mvc-structure.git

```


2. **Instale as dependências (Composer):**
```bash
composer install

```


3. **Inicie o servidor embutido do PHP:**
```bash
php -S localhost:8000 -t public

```


*Acesse no navegador:* `http://localhost:8000`

## 🎯 Finalidade

Projeto desenvolvido com fins educacionais para consolidar conhecimentos em arquitetura de aplicações, design patterns e versionamento profissional com Git.

**Felipe Kauãn** [](https://www.linkedin.com/in/felipekauan/)
[](mailto:felipekauan30@outlook.com)
