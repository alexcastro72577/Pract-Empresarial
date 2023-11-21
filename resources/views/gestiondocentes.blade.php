@extends('adminlte::page')

@section('content')

<head>
    <style>
    .formato_gestion{
        font-family: Consolas;
        background-image:url(/imagenes/gestion.png), url(/imagenes/logo.jpeg);
        background-size: 40rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: 820px 110px , 0px 400px;
    }
    .titulo{
        text-transform: uppercase;
        margin-top:50px;
        margin-left:430px
    }
    .segundotitulo{
        text-transform: uppercase;
        margin-left:360px
    }
    .form_horizontal{
        margin-top:50px;
        margin-bottom:100px;
        margin-left: 350px
    }
    .nombre{
        margin-top: 20px;
        margin-left: 10px;
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .apellido{
        margin-left: 20px;
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tituloprof{
        margin-left: 45px;
        width:110px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .genero{
        margin-left: 35px;
        width:110px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .guardar{
        margin-top:50px;
        margin-left:100px;
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF
    }
    </style>
</head>
<body class="formato_gestion">
    <div class="container">
        <br>
        <h2 class="titulo">Gestión de</h2>
        <h2 class="segundotitulo">Tutores/Tribunales</h2>
        <form class="form_horizontal" method="post" action="{{url('/gestionDTT')}}" enctype="multipart/form-data">
        @csrf
            Nombre(s): <input type="text" class="nombre" name="nombresTutor" value="" required>
            <span class="error">* </span>
            <br><br>
            Apellidos: <input type="text" class="apellido" name="apellidosTutor" value="" required>
            <span class="error">* </span>
            <br><br>
            Título: <select class="tituloprof" name="titulo">
                <option value="Lic.">Licenciad@</option>
                <option value="Ing.">Ingenier@</option>
                <option value="Msc.">Magister</option>
                <option value="Ph.D">Doctor(a)</option>
            </select>
            <span class="error">* </span>
            <br><br>
            Género: <select class="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary guardar">Guardar Datos</button>
        </form>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>      
                    <th scope="row">{{ $dato-> titulo }} {{ $dato-> apellidosTutor }} {{ $dato-> nombresTutor }}</th>
                    <td>
                        <a href="{{url('gestionDTT/'.$dato-> id.'/edit' )}}" class = "btn btn-primary">
                            Editar
                        </a>
                        <form action="{{url('gestionDTT/'.$dato-> id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Desea eliminar?')" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</body>
@endsection
