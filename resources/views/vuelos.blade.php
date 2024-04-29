<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuelos</title>
</head>
<body>
    <div class="container">
    <h1>Mantenimiento Vuelos</h1>
    <br>
    <a href="{{route('vuelos.agregar')}}" class="btn btn-success">Agregar Nuevo</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>Numero Vuelo</th>
                <th>Origen</th>
                <th>Destino</th>
                <th>Numero Asientos</th>
                <th colspan="4">Acciones</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($vuelos as $vuelo)
                <tr>
                    <td>{{ $vuelo->numeroVuelo }}</td>
                    <td>{{ $vuelo->origen }}</td>
                    <td>{{ $vuelo->destino }}</td>
                    <td>{{ $vuelo->numeroAsientos }}</td>
                    <td>
                        <a href="{{route('vuelos.editar',  $vuelo->numeroVuelo)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('vuelos.eliminar',  $vuelo->numeroVuelo)}}">Eliminar</a>
                    </td>
                    <td>
                        <a href="{{route('asientos.agregar', [$vuelo->numeroVuelo, $vuelo->fechaSalida] )}}">Agregar Asiento</a>
                    </td>
                    <td>
                        <a href="{{route('asientos.mostrarXvuelo', $vuelo->numeroVuelo)}}">Ver Asientos</a>
                    </td>
                </tr>
                @endforeach
            
            
        </tbody>

    </table>
    </div>
</body>
</html>