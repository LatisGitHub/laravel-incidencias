<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    <table class="table">
       <center><h1><a href="/"> Incidencias</a></h1></center>
        <thead>
        <tr>
                <th scope="col">Latitud</th>
                <th scope="col">Lonogitud</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Direccion</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>

            </tr>
        </thead>
    
        <tbody>
        @foreach($incidencias as $incidencia)
            <tr>
                <th scope="col">{{$incidencia->latitud}}</th>
                <th scope="col">{{$incidencia->longitud}}</th>
                <th scope="col">{{$incidencia->ciudad}}</th>
                <th scope="col">{{$incidencia->direccion}}</th>
                <th scope="col">{{$incidencia->descripcion}}</th>
                <th scope="col">{{$incidencia->estado}}</th>
                <th scope="col"><a href="/incidencia/{{$incidencia->id}}">Detalle</a>
                <a href="/newIncidencia">Crear Incidencia</a>
            
            </th>
            </tr>
            @endforeach
        </tbody>

        
    </table>

</body>

</html>