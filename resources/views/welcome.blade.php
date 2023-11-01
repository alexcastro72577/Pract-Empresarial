@extends('adminlte::page')

@section('content')

    <head>
    <style>

    .formato_general{
        font-family: Consolas;
        background-image:url(/imagenes/Docu.png), url(/imagenes/logo.jpeg);
        background-size: 20rem, 5rem;
        background-repeat: no-repeat, no-repeat
    }
    .titulo{
        margin-left: 350px
    }
    .segtitulo{
        margin-left:420px
    }
    .form-horizontal{
        margin-top:40px;
        margin-bottom:100px;
        margin-left: 350px
    }
    .carrera{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray;
    }
    .gestion{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .año{
        width:60px;
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
    .materias{
        width:40px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .b{
        margin-top:25px;
        margin-left:120px;
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF
    }
    </style>
    </head>

    <body class="formato_general">

        <div class="container">

            <h2 class="titulo">FORMULARIO DE CONCLUSIÓN</h2>
            <h2 class="segtitulo">PLAN DE ESTUDIOS</h2>
            
        <form class="form-horizontal" method="post" action="{{url('/form_egreso')}}" enctype="multipart/form-data">
            @csrf
            <font color="black">Carrera:</font> <select class="carrera" name="Carrera">
                @foreach($carreras as $carrera)
                <option  value="{{$carrera->NOMBRECARRERA}}">{{$carrera->NOMBRECARRERA}}</option>
                @endforeach
            </select>

            <span class="error">* </span>
            <br><br>
            <font color="black">Gestión:</font> <select class="gestion" name="numGestion">
                <option value="I">I</option>
                <option value="II">II</option>
            </select>
            <span class="error">* </span>
            Año: <input type="number" class="año" name="anio" value="" required>
            <span class="error">* </span>
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
            N° Materias Aprobadas: <input type="number" class="materias" name="numMaterias" value="" required>
            <span class="error">* </span>
            <br>
            <button type="submit" class="btn btn-primary b">Generar Carta</button>  
        </form>
        </div>
    </body>
@endsection