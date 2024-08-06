<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Romano para Número</title>
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
        <h1>Converter Romano para Número</h1>
        <form action="{{ url('/converter-de-romano') }}" method="POST">
            @csrf
            <label for="romano">Número Romano:</label>
            <input type="text" id="romano" name="romano" required>
            <button type="submit">Converter</button>
        </form>

        @if(session('numero'))
            <h2>Número: {{ session('numero') }}</h2>
        @endif

        <h2>Tabela de Números Romanos</h2>
        <table>
            <thead>
                <tr>
                    <th>Número</th>
                    <th>Romano</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>I</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>IV</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>V</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>IX</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>X</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>XL</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>L</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td>XC</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>C</td>
                </tr>
                <tr>
                    <td>400</td>
                    <td>CD</td>
                </tr>
                <tr>
                    <td>500</td>
                    <td>D</td>
                </tr>
                <tr>
                    <td>900</td>
                    <td>CM</td>
                </tr>
                <tr>
                    <td>1000</td>
                    <td>M</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ url('/converter-para-romano') }}">Converter Número para Romano</a>
    </div>
</body>
</html>
