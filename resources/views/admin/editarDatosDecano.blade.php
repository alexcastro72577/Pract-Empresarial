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
        margin-left:455px
    }
    .form_horizontal{
        margin-top:50px;
        margin-bottom:100px;
        margin-left: 300px
    }
    .nombre{
        margin-top: 10px;
        margin-left: 10px;
        width: 250px;
        border-radius: 5px;
        border: 2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nombrefac{
        margin-left: 60px;
        width: 250px;
        border-radius: 5px;
        border: 2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .genero{
        margin-left: 70px;
        width: 110px;
        border-radius: 5px;
        border: 2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .guardar{
        margin-top:50px;
        margin-left:130px;
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
        <h2 class="titulo">Edición de</h2>
        <h2 class="segundotitulo">Decano</h2>
        <form class="form_horizontal" method="post" action="{{url('/gestionDD/'.$datosDecano->id)}}" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
            Nombre Decano: <input type="text" class="nombre" name="NOMBREAUTORIDAD" value=" {{ $datosDecano-> NOMBREAUTORIDAD }} " required>
            <span class="error">* </span>
            <br><br>
            Facultad: <input type="text" class="nombrefac" name="FACULTAD" value=" {{ $datosDecano-> FACULTAD }}" required>
            <span class="error">* </span>
            <br><br>
            Género: <select class="genero" name="GENEROAUTORIDAD">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary guardar">Guardar Cambios</button>
        </form>
    </div>
</body>
@endsection
