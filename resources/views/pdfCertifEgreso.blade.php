<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <style>
        .encabezado{
            font-size: 25px;
            margin-top: 60px;
            margin-bottom: 30px;
        }
        .saludo{
            font-size: 20px;
            margin-left: 100px;
            margin-top: 30px;
            margin-bottom: 5px;
            line-height: 300%;
        }
        .cuerpo{
            text-align: justify;
            font-size: 15px;
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .despedida{
            font-size: 15px;
            margin-left: 100px;
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .fecha{
            margin-top: 30px;
            margin-bottom: 100px;
        }
        .firma{
            font-size: 15px;
        }
        .cargo{
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <center>
    <p class="encabezado">
        <u><b>CERTIFICADO DE HABILITACIÓN<br>
        PARA MODALIDAD DE TITULACIÓN</b></u>
    </p>
    </center>
    <p class="saludo"; style="font-size: 15px">
        <b>A quien corresponda</b>
        <br>El suscrito, Director de la Carrera de Licenciatura en {{$nombre["Carrera"]}},
        <br><b>C E R T I F I C A:</b>
    </p>

    <p class="cuerpo"><br>Que {{ $nombre["pronombre"] }} <b>Univ. {{$nombre["apellidoEst"]}} {{ $nombre["nombreEst"] }}</b> con <b>C.I: {{ $nombre["ci"] }} {{ $nombre["exp"] }}</b>, ha  aprobado {{$nombre ["numMaterias"] }}
        materias del Plan de Estudios de la Carrera de Licenciatura en {{$nombre["Carrera"]}}, hasta la gestión {{ $nombre["numGestion"] }}/{{ $nombre["anio"] }} 
        faltándole la materia de {{ $nombre["materiaEgreso"] }} para la conclusión, por lo tanto está habilitad{{ $nombre["generoGramatical"] }} para cualquier
        modalidad de titulación.
    </p>

    <p class="despedida"><br>Es cuanto se informa a solicitud de {{ $nombre["pronombre"] }} interesad{{ $nombre["generoGramatical"] }} para fines consiguientes.</p>

    <center>
        <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}
        </p>

        <p class="firma">{{ $nombre["directorCarrera"]}}
        <br><b class="cargo">DIRECTOR CARR. {{ $nombre["Carrera"] }}</b></p>
    </center> 

</body>

</html>
