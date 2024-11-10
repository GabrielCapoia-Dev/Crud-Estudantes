# Trabalho Crud de Estudantes

Este projeto é uma aplicação web para o gerenciamento de estudantes e salas, desenvolvido com Laravel no backend e integrado com o frontend para uma experiência de usuário eficiente.

## Funcionalidades

- **Cadastro de Estudantes**: Permite cadastrar estudantes com validação de CPF e associação a uma sala.
- **Cadastro de Salas**: Permite criar salas e associá-las aos estudantes.
- **Validações**: A aplicação valida o CPF para garantir que apenas números sejam inseridos e formata o CPF automaticamente.
- **Alertas e Modais**: Caso não haja salas cadastradas, o usuário é alertado e pode ser redirecionado para a página de cadastro de salas.

## Como rodar

1. Clone o repositório:
   ```bash
   git clone <URL-do-repositório>

2. Instale as dependencias:
    ```bash
    composer install

### 3 configure o arquivo .env com as credenciais do banco de dados


4. Execute as migrates:
   ```bash
   php artisan migrate


5. Inicie o servidor:
   ```bash
   php artisan serve


## Tecnologias usadas

- **Backend:** Laravel
- **Frontend:** Blade, JavaScript
- **Banco de Dados:** MySQL
