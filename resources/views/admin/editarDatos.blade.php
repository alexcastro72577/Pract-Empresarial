@extends('layouts.app')

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
        margin-top:50px;
        margin-left:80px
    }
    .form_horizontal{
        margin-top:100px;
        margin-bottom:100px
    }
    .ncarrera{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nmateria{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .ndirector{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .btn{
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
        <h2 class="titulo">Editar Datos</h2>
        <form class="form_horizontal" method="post" action="{{url('/gestionInfo/'.$datosGeneral->id )}}" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
            Nombre Director de Carrera: <input type="text" class="ndirector" name="NOMBREDIRECTOR" value=" {{ $datosGeneral->NOMBREDIRECTOR }}" required>
            <span class="error">* </span>
            <br><br>
            Nombre de la Materia de Egreso: <input type="text" class="nmateria" name="NOMBMATEG" value=" {{ $datosMateria->NOMBMATEG }}" required>
            <span class="error">* </span>
            <br><br>
            Nombre de la Carrera: <input type="text" class="ncarrera" name="NOMBRECARRERA" value=" {{ $datosCarrera->NOMBRECARRERA }}" required>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary">Guardar Datos</button>
        </form>
    </div>
</body>
@endsection
