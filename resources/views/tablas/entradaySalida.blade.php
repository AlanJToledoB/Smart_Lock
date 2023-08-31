<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/estilos.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    @include('header')

    <div>
    </div>
    <div class="table_container">
        <h2>Tabla Entrada y Salida</h2>
        <table class="table-style">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Fecha</th>
                    <th></th> <!-- Espacio para el ícono de basurero -->
                </tr>
            </thead>
            <tbody>
                @foreach ($inputOrOutputs as $inputOutput)
                    <tr>
                        <td>{{ $inputOutput->user->name }}</td>
                        <td>{{ $inputOutput->entrada }}</td>
                        <td>{{ $inputOutput->salida }}</td>
                        <td>{{ $inputOutput->created_at->format('d/m/y') }}</td>
                        <td>
                            <i class="bi bi-trash-fill"></i>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
