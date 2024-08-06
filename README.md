# Conversor de Números Romanos

Este projeto é um conversor de números que transforma números inteiros em números romanos e vice-versa. Desenvolvido com Laravel, o projeto possui uma interface web simples para facilitar a interação do usuário.

## Funcionalidades

- Converter números inteiros para números romanos.
- Converter números romanos para números inteiros.
- Visualizar a conversão em uma interface web amigável.

## Estrutura do Projeto

- **`app/Http/Controllers/RomanController.php`**: Controlador responsável por gerenciar as requisições e interações do usuário.
- **`app/Services/RomanConverter.php`**: Serviço que realiza a conversão entre números romanos e inteiros.
- **`resources/views/converter_para_romano.blade.php`**: Página para converter números inteiros para romanos.
- **`resources/views/converter_de_romano.blade.php`**: Página para converter números romanos para inteiros.
- **`resources/views/welcome.blade.php`**: Página inicial com informações sobre o projeto.
- **`public/css/style.css`**: Arquivo de estilos para a interface web.

## Instalação

1. Clone o repositório:

    ```sh
    git clone https://github.com/seu-usuario/seu-repositorio.git
    ```

2. Navegue até o diretório do projeto:

    ```sh
    cd seu-repositorio
    ```

3. Instale as dependências do Composer:

    ```sh
    composer install
    ```

4. Configure o arquivo `.env`:

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Configure as informações do banco de dados no arquivo `.env`.

6. Execute as migrações (se necessário):

    ```sh
    php artisan migrate
    ```

7. Inicie o servidor de desenvolvimento:

    ```sh
    php artisan serve
    ```

8. Acesse o projeto em `http://localhost:8000`.

## Uso

### Converter Número para Romano

1. Acesse `http://localhost:8000/converter-para-romano`.
2. Insira um número inteiro no campo de entrada.
3. Clique no botão "Converter".
4. O número romano correspondente será exibido na tela.

### Converter Romano para Número

1. Acesse `http://localhost:8000/converter-de-romano`.
2. Insira um número romano no campo de entrada.
3. Clique no botão "Converter".
4. O número inteiro correspondente será exibido na tela.
