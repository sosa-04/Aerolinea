<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tipos de Asientos</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Crear Tipo Asiento</h2>
                <br>
                <form action="{{route('tiposAsientos.guardar')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="color">Descripcion:</label>
                        <input type="text" class="form-control" name="descripcion"/>
                    </div>
                    <div class="form-group">
                        <label for="metros">Precio</label>
                        <input type="text"class="form-control" name="precio"/>
                    </div>
                    <div class="form-group">
                        <label for="tipoPropiedad">Estado:</label>
                        <input type="text" class="form-control" name="estado"/>
                    </div>

                    
                    <br>
                    <div class="form-group">
                        <a href="{{route('tiposAsientos.mostrar')}}" class="btn btn-warning">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>