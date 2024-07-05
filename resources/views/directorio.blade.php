<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Directorio Telef&oacute;nico</title>
</head>
<body class="antialiased">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h2>Directorio Telefonico</h2>
        
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">

                <p>
                    <a href='{{route('Directorio.crear')}}' class="btn btn-primary">Agregar nuevo</a>
                    <a href='{{route('Directorio.buscar')}}' class="btn btn-success">Buscar</a>
                </p>

                <table class="table">
                    <thead>
                        <th scope="col" name="codigo">Codigo</th>
                        <th scope="col" name="nombre">Nombre</th>
                        <th scope="col" name="tipoElectrodomestico">Apellido</th>
                        <th scope="col" name="precio">Telefono</th>
                        <th scope="col">Ver contactos</th>
                        <th scope="col">Eliminar</th>
                    </thead>
                    <tbody>

                            @foreach($directorios as $directorios)
                            <tr>
                                <td>{{$directorios-> codigoEntrada}}</td>
                                <td>{{$directorios-> nombre}}</td>
                                <td>{{$directorios-> apellido}}</td>
                                <td>{{$directorios-> telefono}}</td>
                                <td>
                                    <a href="{{route('Contactos.verContactos')}}" class="btn btn-info">Ver</a>
                                </td>
                                <td>
                                    <a href="{{route('Directorio.eliminar')}}" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>

                </table>

                </div>

            </div>

        </div>


    </div>
</body>
</html>