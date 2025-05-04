<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Temperatura SOAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h2>Conversión de Temperatura</h2>

    <form method="POST" action="{{ route('temperatura.convertir') }}">
        @csrf
        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de conversión</label>
            <select name="tipo" class="form-select">
                <option value="CelsiusToFahrenheit">Celsius a Fahrenheit</option>
                <option value="FahrenheitToCelsius">Fahrenheit a Celsius</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" step="any" name="valor" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Convertir</button>
    </form>

    @isset($resultado)
        <div class="alert alert-success mt-4">
            <strong>Resultado:</strong> {{ $resultado }}
        </div>
    @endisset

    @isset($error)
        <div class="alert alert-danger mt-4">
            {{ $error }}
        </div>
    @endisset

</body>
</html>
