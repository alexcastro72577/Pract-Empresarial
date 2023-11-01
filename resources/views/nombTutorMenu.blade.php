@extends('adminlte::page')

@section('content')

    <head>
    <style>

    .form-horizontal{
        margin-top:35px;
        margin-bottom:50px
    }
    .formato_general{
        font-family: Consolas;
        background-image:url(/imagenes/Docu.png), url(/imagenes/logo.jpeg);
        background-size: 50rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: right, center left;
    }
    .active{
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF;
        color: #FFFFFF
    }
    .segtitulo{
        margin-left:25px
    }
    .carrera{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .tutor{
        width: 250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nombre{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .apellido{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .genero{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .CI{
        width:90px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .exp{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nombreproy{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .codsid{
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

            <h2>FORMULARIO DE DESIGNACIÓN</h2>
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
            Docente Tutor: <input typer="text" class="tutor" name="tutor" value="" required></input>
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
            <font color="black">Exp.:</font> <select class="exp" name="exp">
                <option value="CBBA">CBBA</option>
                <option value="LPZ">LPZ</option>
                <option value="SCZ">SCZ</option>
                <option value="CHQ">CHQ</option>
                <option value="TJA">TJA</option>
                <option value="ORU">ORU</option>
                <option value="PND">PND</option>
                <option value="PSI">PSI</option>
                <option value="BNI">BNI</option>
            </select>
            <span class="error">* </span>
            <br><br>
            Nombre de Proyecto: <input type="text" class="nombreproy" name="nombreProyecto" value="" required>
            <span class="error">* </span>
            <br><br>
            Codigo SIDOC: <input type="number" class="codsid" name="codSidoc" value="" required>
            <span class="error">* </span>
            <br>
            <button type="submit" class="btn btn-primary b">Generar Carta</button>  
        </form>
        </div>
    </body>
@endsection