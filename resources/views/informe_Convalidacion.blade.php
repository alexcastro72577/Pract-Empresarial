@extends('layouts.app')

@section('content')

    <head>
    <style>

    .form-horizontal{
        margin-top:70px;
        margin-bottom:100px
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
        margin-left:38px
    }
    .universidad{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .carrera_a{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray;
    }
    .carrera_b{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray;
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
        width:80px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .exp{
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .b{
        margin-top:50px;
        margin-left:120px;
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF
    }

    </style>
    </head>

    <body class="formato_general">
        <button class="btn btn-primary active" onclick="location='/usuario'" <?php if ( Auth::user()-> rol == "Administrador"){ ?> style="display: none;" <?php   } ?> > Regresar al<br>Menú Principal</button>
        <button class="btn btn-primary active" onclick="location='/admin'" <?php if ( Auth::user()-> rol == "Usuario"){ ?> style="display: none;" <?php   } ?> > Regresar al<br>Menú Principal</button>
        <div class="container">

            <h2>FORMULARIO DE INFORME</h2>
            <h2 class="segtitulo">DE CONVALIDACIÓN</h2>
            
        <form class="form-horizontal" method="post" action="{{url('/inf_conv')}}" enctype="multipart/form-data">
            @csrf
            Universidad de origen:<input type="text" class="universidad" name="uniprev" value="" required>
            <span class="error">* </span>
            <br><br>
            Carrera de origen:<select class="carrera_a" name="carreraA">
                <option value="LIC. DIDAC. MATEMATICA">LIC. DIDACTICA MATEMATICA</option>
                <option value="LIC. EN BIOLOGIA">LIC. EN BIOLOGIA</option>
                <option value="LIC. EN DIDAC. DE LA FISICA">LIC. EN DIDACTICA DE LA FISICA</option>
                <option value="LIC. EN FISICA">LIC. EN FISICA</option>
                <option value="LIC. EN ING. ELECTROMECANICA">LIC. EN ING. ELECTROMECANICA</option>
                <option value="LIC. EN ING. CIVIL (NUEVO)">LIC. EN INGENIERIA CIVIL (NUEVO)</option>
                <option value="LIC. EN ING. DE ALIMENTOS">LIC. EN INGENIERIA DE ALIMENTOS</option>
                <option value="LIC. EN ING. DE SISTEMAS (M.A.)">LIC. EN INGENIERIA DE SISTEMAS (M.A.)</option>
                <option value="LIC. EN ING. DE SISTEMAS (M.N.)">LIC. EN INGENIERIA DE SISTEMAS (M.N.)</option>
                <option value="LIC. EN ING. ELECTRICA">LIC. EN INGENIERIA ELECTRICA</option>
                <option value="LIC. EN ING. ELECTRONICA">LIC. EN INGENIERIA ELECTRONICA</option>
                <option value="LIC. EN ING. INDUSTRIAL">LIC. EN INGENIERIA INDUSTRIAL</option>
                <option value="LIC. EN ING. INFORMATICA">LIC. EN INGENIERIA INFORMATICA</option>
                <option value="LIC. EN ING. MATEMATICA">LIC. EN INGENIERIA MATEMATICA</option>
                <option value="LIC. EN ING. MECANICA">LIC. EN INGENIERIA MECANICA</option>
                <option value="LIC. EN ING. QUIMICA">LIC. EN INGENIERIA QUIMICA</option>
                <option value="LIC. EN MATEMATICAS">LIC. EN MATEMATICAS</option>
                <option value="LIC. EN QUIMICA">LIC. EN QUIMICA</option>
                <option value="PROG. DE ING. EN BIOTECNOLOGIA">PROG. DE INGENIERIA EN BIOTECNOLOGIA</option>
                <option value="PROG. LIC. EN ING. EN ENERGIA">PROG. LIC. EN INGENIERIA EN ENERGIA</option>
            </select>
            <span class="error">* </span>
            <br><br>
            <font color="black">Carrera a convalidar:</font> <select class="carrera_b" name="Carrera">
                @foreach($carreras as $carrera)
                <option  value="{{$carrera->NOMBRECARRERA}}">{{$carrera->NOMBRECARRERA}}</option>
                @endforeach
            </select>
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
            C.I.: <input type="text" class="CI" name="ci" value="" required>
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
            <button type="submit" class="btn btn-primary b">Generar Carta</button>  
        </form>
        </div>
    </body>
@endsection