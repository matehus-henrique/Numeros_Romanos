<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Projeto de Conversão de Números Romanos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li><a href="{{ url('/') }}">Início</a></li>
                <li><a href="{{ url('/converter-para-romano') }}">Converter Número para Romano</a></li>
                <li><a href="{{ url('/converter-de-romano') }}">Converter Romano para Número</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1>Bem-vindo ao Projeto de Conversão de Números Romanos</h1>
        <p>Este projeto é uma ferramenta útil para converter números normais em números romanos e vice-versa. Com uma interface simples e intuitiva, você pode facilmente realizar conversões e visualizar os resultados.</p>

        <h2>Funcionalidades</h2>
        <ul>
            <li>Converter números normais para números romanos.</li>
            <li>Converter números romanos para números normais.</li>
            <li>Visualizar uma tabela com os números romanos e seus valores correspondentes.</li>
        </ul>

        <h2>Como Usar</h2>
        <p>Para usar a ferramenta, basta selecionar uma das opções abaixo:</p>
        <ul>
            <li><a href="{{ url('/converter-para-romano') }}">Converter Número para Romano</a></li>
            <li><a href="{{ url('/converter-de-romano') }}">Converter Romano para Número</a></li>
        </ul>

        <footer>
            <p>&copy; 2024 Projeto de Conversão de Números Romanos. Todos os direitos reservados.</p>
        </footer>
    </div>
</body>
</html>
