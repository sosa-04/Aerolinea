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
        <h1>Asientos por vuelo</h1>
        <br>
        <div>
            <h3>Numero de vuelo</h3>
            <input type="text" value="{{$id}}" readonly>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Id Tipo Asiento</th>
                    <th>Numero Asiento</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($asientos as $asiento)
                    <tr>
                        <td>{{ $asiento->idTipoAsiento }}</td>
                        <td>{{ $asiento->numeroAsiento }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{route('vuelos.mostrar')}}" class="btn btn-warning">Volver</a>
        </div>
    </div>
</body>
</html>