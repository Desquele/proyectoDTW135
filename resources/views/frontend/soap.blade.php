<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conversión de Temperatura SOAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(to bottom right, #cce5ff, #ffffff);
            min-height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1rem;
            padding: 2rem;
        }

        .card-header {
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">
                            <i class="bi bi-thermometer-half me-2"></i>Conversión de Temperatura
                        </h4>
                    </div>
                    <div class="card-body">
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
                                <input type="number" step="any" name="valor" class="form-control" placeholder="Ej: 37" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">
                                    <i class="bi bi-arrow-left-right me-1"></i> Convertir
                                </button>
                            </div>
                        </form>

                        @isset($resultado)
                            <div class="alert alert-success mt-4" role="alert">
                                <strong>Resultado:</strong> {{ $resultado }}
                            </div>
                        @endisset

                        @isset($error)
                            <div class="alert alert-danger mt-4" role="alert">
                                {{ $error }}
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
