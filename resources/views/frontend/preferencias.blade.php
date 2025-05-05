<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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

        table th, table td {
            padding: 12px;
        }

        table th {
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">
                            📚 Libros disponibles
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Título</th>
                                    <th>Autor</th>
                                    <th>Año</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($libros as $libro)
                                    <tr>
                                        <td>{{ $libro['titulo'] }}</td>
                                        <td>{{ $libro['autor'] }}</td>
                                        <td>{{ $libro['anio'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
