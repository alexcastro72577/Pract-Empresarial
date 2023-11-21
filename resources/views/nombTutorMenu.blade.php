@extends('adminlte::page')

@section('content')

    <head>
    <style>

    .formato_general{
        font-family: Consolas;
        background-image:url(/imagenes/Docu.png), url(/imagenes/logo.jpeg);
        background-size: 50rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: right, center left;
    }
    .titulo{
        margin-left: 350px
    }
    .segtitulo{
        margin-left: 370px
    }
    .form-horizontal{
        margin-top: 70px;
        margin-bottom: 50px;
        margin-left: 350px;
    }
    .carrera{
        width:190px;
        margin-left: 96px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tutor{
        margin-left: 50px;
        width: 250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nombre{
        margin-left: 74px;
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .apellido{
        margin-left: 74px;
        width: 250px;
        border-radius: 5px;
        border: 2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .genero{
        margin-left: 97px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .CI{
        margin-left: 125px;
        width:90px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .seccionexp{
        margin-left: 40px;
    }
    .exp{
        margin-left: 10px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nombreproy{
        margin-left: 10px;
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .codcite{
        margin-left: 66px;
        width:60px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .seccionaño{
        margin-left: 76px
    }
    .año{
        margin-left: 10px;
        width:60px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .b{
        margin-top: 25px;
        margin-left: 120px;
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF
    }

    </style>
    </head>

    <body class="formato_general">
        <div class="container">

            <h2 class="titulo">FORMULARIO DE DESIGNACIÓN</h2>
            <h2 class="segtitulo">NOMBRAMIENTO DE TUTOR</h2>
            
        <form class="form-horizontal" method="post" action="{{url('/nombtutor')}}" enctype="multipart/form-data">
            @csrf
            <font color="black">Carrera:</font> <select class="carrera" name="Carrera">
                @foreach($carreras as $carrera)
                <option  value="{{$carrera->NOMBRECARRERA}}">{{$carrera->NOMBRECARRERA}}</option>
                @endforeach
            </select>
            <span class="error">* </span>
            <br><br>
            Docente Tutor: <select class="tutor" name="tutor">
                @foreach($tutores as $tutor)
                <option  value="{{$tutor->apellidosTutor}}">{{$tutor->titulo}} {{$tutor->apellidosTutor}} {{$tutor->nombresTutor}}</option>
                @endforeach
            </select>
            <span class="error">*</span>
            <br><br>
            Nombre(s): <input type="text" class="nombre" name="nombreEst" value="" required>
            <span class="error">* </span>
            <br><br>
            Apellido(s): <input type="text" class="apellido" name="apellidoEst" value="" required>
            <span class="error">* </span>
            <br><br>
            <font color="black">Género:</font> <select class="genero" name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <span class="error">* </span>
            <br><br>
            C.I.: <input type="number" class="CI" name="ci" value="" required>
            <span class="error">* </span>
            <span class="seccionexp">Exp.: <select class="exp" name="exp">
                <option value="CBBA">CBBA</option>
                <option value="LPZ">LPZ</option>
                <option value="SCZ">SCZ</option>
                <option value="CHQ">CHQ</option>
                <option value="TJA">TJA</option>
                <option value="ORU">ORU</option>
                <option value="PND">PND</option>
                <option value="PSI">PSI</option>
                <option value="BNI">BNI</option>
            </select></span>
            <span class="error">* </span>
            <br><br>
            Nombre de Proyecto: <input type="text" class="nombreproy" name="nombreProyecto" value="" required>
            <span class="error">* </span>
            <br><br>
            Codigo CITE: <input type="number" class="codcite" name="codCite" value="" required>
            <span class="error">* </span>
            <span class="seccionaño">Año: <input type="number" class="año" name="anio" value="" required></span>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary b">Generar Carta</button>  
        </form>
        </div>
    </body>
@endsection
