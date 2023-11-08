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
        margin-left: 300px
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
        margin-left: 10px;
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tituloprof{
        margin-left: 25px;
        width:110px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .genero{
        margin-left: 15px;
        width:110px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .guardar{
        margin-top:50px;
        margin-left:150px;
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
            Datos Nuevo Tutor/Tribunal
            <br><br>
            Nombre: <input type="text" class="nombre" name="nombrejefe" value="" required>
            <span class="error">* </span>
            <br><br>
            Apellido: <input type="text" class="apellido" name="apellidojefe" value="" required>
            <span class="error">* </span>
            <br><br>
            Título: <select class="tituloprof" name="tituloprof">
                <option value="Lic.">Licenciad@</option>
                <option value="Ing.">Ingenier@</option>
                <option value="Msc.">Magister</option>
                <option value="Ph.D">Doctor(a)</option>
            </select>
            <span class="error">* </span>
            <br><br>
            Genero: <select class="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary guardar">Guardar Datos</button>
        </form>
    </div>
</body>
@endsection