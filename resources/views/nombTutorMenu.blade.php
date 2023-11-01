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
    .nombreproy{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .codsid{
        width:250px;
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
            Docente Tutor:<select class="tutor" name="tutor">
            <option value="Ing. Samuel Acha Perez">Ing. Samuel Acha Perez</option>
            <option value="Ing. Luis Agreda Morales">Ing. Luis Agreda Morales</option>
            <option value="Ing. Marcelo Antezana Camacho">Ing. Marcelo Antezana Camacho</option>
            <option value="Lic. Nancy Tatian Aparicio Yuja">Lic. Nancy Tatian Aparicio Yuja</option>
            <option value="Ing. Jose Richard Ayoroa Cardozo">Ing. Jose Richard Ayoroa Cardozo</option>
            <option value="Lic. Maria Leticia Blanco Coca">Lic. Maria Leticia Blanco Coca</option>
            <option value="Lic. Boris Marcelo Calancha Navia">Lic. Boris Marcelo Calancha Navia</option>
            <option value="Lic. Indira Camacho del Castillo">Lic. Indira Camacho del Castillo</option>
            <option value="Ing. Vladimir Costas Jauregui">Ing. Vladimir Costas Jauregui</option>
            <option value="Ing. Grover Nicolas Cussi">Ing. Grover Nicolas Cussi</option>
            <option value="Ing. David Escalera Fernandez">Ing. David Escalera Fernandez</option>
            <option value="Ing. Americo Fiorilo Lozada">Ing. Americo Fiorilo Lozada</option>
            <option value="Ing. Juan Marcelo Flores Soliz">Ing. Juan Marcelo Flores Soliz</option>
            <option value="Lic. Corina Justina Flores Villarroel">Lic. Corina Justina Flores Villarroel</option>
            <option value="Ing. Juan Ruben Garcia Molina">Ing. Juan Ruben Garcia Molina</option>
            <option value="Lic. Carmen Rosa Garcia Perez">Lic. Carmen Rosa Garcia Perez</option>
            <option value="Lic. Esthela Grilo Salvatierra">Lic. Esthela Grilo Salvatierra</option>
            <option value="Ing. Kirt Rolando Jaldin Rosales">Ing. Kirt Rolando Jaldin Rosales</option>
            <option value="Ing. Valentin Laime Zapata">Ing. Valentin Laime Zapata</option>
            <option value="Ing. Carlos B. Manzur Soria">Ing. Carlos B. Manzur Soria</option>
            <option value="Ing. Victor Hugo Montaño Quiroga">Ing. Victor Hugo Montaño Quiroga</option>
            <option value="Ing. Marco Antonio Montecinos Choque">Ing. Marco Antonio Montecinos Choque</option>
            <option value="Ing. Yoni Richard Montoya Burgos">Ing. Yoni Richard Montoya Burgos</option>
            <option value="Ing. Jorge Orellana Araoz">Ing. Jorge Orellana Araoz</option>
            <option value="Lic. Patricia Rodriguez Bilbao">Lic. Patricia Rodriguez Bilbao</option>
            <option value="Lic. Patricia Romero Rodriguez">Lic. Patricia Romero Rodriguez</option>
            <option value="Lic. Carla Salazar Serrudo">Lic. Carla Salazar Serrudo</option>
            <option value="Lic. Rose Mary Torrico Bascope">Lic. Rose Mary Torrico Bascope</option>
            <option value="Ing. Hernan Ustariz Vargas">Ing. Hernan Ustariz Vargas</option>
            <option value="Ing. Vargas Peredo">Ing. Vargas Peredo</option>
            <option value="Ing. Jimmy Villarroel Novillo">Ing. Jimmy Villarroel Novillo</option>
            <option value="Ing. Henrry Frank Villarroel Tapia">Ing. Henrry Frank Villarroel Tapia</option>
            <option value="Ing. Jhomil Zambrana Burgos">Ing. Jhomil Zambrana Burgos</option>
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
            Nombre de Proyecto: <input type="text" class="nombreproy" name="nombreProyecto" value="" required>
            <span class="error">* </span>
            <br><br>
            Codigo SIDOC: <input type="text" class="codsid" name="codSidoc" value="" required>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary b">Generar Carta</button>  
        </form>
        </div>
    </body>
@endsection