<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Temperatura (SOAP)</title>
</head>
<body>

    <h2>Conversor de Temperatura (SOAP)</h2>

    <form method="POST" action="{{ route('temperatura.convertir') }}">
        @csrf

        <label for="tipo">Tipo de conversión:</label>
        <select name="tipo" id="tipo" required>
            <option value="CelsiusToFahrenheit">Celsius a Fahrenheit</option>
            <option value="FahrenheitToCelsius">Fahrenheit a Celsius</option>
        </select><br><br>

        <label for="valor">Valor:</label>
        <input type="text" name="valor" id="valor" required><br><br>

        <button type="submit">Convertir</button>
    </form>

    @isset($resultado)
        <p><strong>Resultado:</strong> {{ $resultado }}</p>
    @endisset

    @isset($error)
        <p><strong>Error:</strong> {{ $error }}</p>
    @endisset

</body>
</html>
