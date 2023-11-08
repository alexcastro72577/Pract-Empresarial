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
        margin-left: 355px
    }
    .form-horizontal{
        margin-top:35px;
        margin-bottom:50px;
        margin-left: 350px;
    }
    .carrera{
        margin-left: 96px;
        width: 190px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tribunal1{
        margin-left: 20px;
        width: 250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tribunal2{
        margin-left: 20px;
        width: 250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tribunal3{
        margin-left: 20px;
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
    .modalidad{
        margin-left: 75px;
        width:160px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .codcite{
        margin-left: 66px;
        width:70px;
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
            <h2 class="segtitulo">NOMBRAMIENTO DE TRIBUNAL</h2>
            
        <form class="form-horizontal" method="post" action="{{url('/nombtribunal')}}" enctype="multipart/form-data">
            @csrf
            Carrera: <select class="carrera" name="Carrera">
                @foreach($carreras as $carrera)
                <option  value="{{$carrera->NOMBRECARRERA}}">{{$carrera->NOMBRECARRERA}}</option>
                @endforeach
            </select>
            <span class="error">* </span>
            <br><br>
            Docente Tribunal 1: <input typer="text" class="tribunal1" name="tribunal1" value="" required></input>
            <span class="error">*</span>
            <br><br>
            Docente Tribunal 2: <input typer="text" class="tribunal2" name="tribunal2" value="" required></input>
            <span class="error">*</span>
            <br><br>
            Docente Tribunal 3: <input typer="text" class="tribunal3" name="tribunal3" value="" required></input>
            <span class="error">*</span>
            <br><br>
            <b>DATOS DEL ESTUDIANTE</b>
            <br><br>
            Nombre(s): <input type="text" class="nombre" name="nombreEst" value="" required>
            <span class="error">* </span>
            <br><br>
            Apellido(s): <input type="text" class="apellido" name="apellidoEst" value="" required>
            <span class="error">* </span>
            <br><br>
            Género: <select class="genero" name="genero">
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
            Modalidad: <select class="modalidad" name="modalidad">
                <option value="Proyecto de Grado">Proyecto de Grado</option>
                <option value="Adscripción">Adscripción</option>
                <option value="Tesis">Tesis</option>
                <option value="Trabajo Dirigido">Trabajo Dirigido</option>
            </select>
            <span class="error">* </span>
            <br><br>
            Codigo CITE: <input type="number" class="codcite" name="codCite" value="" required>
            <span class="error">* </span>
            <span class="seccionaño">Año: <input type="number" class="año" name="anio" value="" required></span>
            <span class="error">* </span>
            <br>
            <button type="submit" class="btn btn-primary b">Generar Carta</button>  
        </form>
        </div>
    </body>
@endsection