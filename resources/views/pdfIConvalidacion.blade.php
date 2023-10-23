<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Reporte de Usuarios</title>
    <style>
        .titulo{
            font-size: 20px;
            margin-top: 100px;
            margin-bottom: 50px;
            margin-left: 50px
        }
        .espacio1{
            color: #FFFFFF;
            margin-left: 17px
        }
        .espacio2{
            color: #FFFFFF;
            margin-left: 6px
        }
        .encabezado{
            font-size: 15px;
            margin-bottom: 50px;
            margin-left: 50px;
            margin-right: 50px
        }
        .aquien{
            margin-left: 45px
        }
        .dequien{
            margin-left: 45px
        }
        .referencia{
            margin-left: 45px
        }
        .tabla{
            font-size: 15px;
            margin-bottom: 50px;
            margin-left: 50px;
            margin-right: 50px
        }
        .dedonde{}
        .adonde{
            text-transform: uppercase
        }
        .cuerpo{
            text-align: justify;
            font-size: 15px;
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 35px
        }
        .fecha{
            font-size: 15px
        }
    </style>
</head>

<body>
    <center><h2 class="titulo"><b><u>INFORME</u></b></h2></center>
    <div class="encabezado">
        <b>A:</b><b class="espacio1">a</b> Nombre Decano<br>
        <p class="aquien">
           <b>DECANO DE LA FACULTAD</b> 
        </p>
        <b>DE:</b><b class="espacio2">a</b> Nombre Jefe de Departamento<br>
        <p class="dequien">
            <b>JEFE DEPARTAMENTO INFORMÁTICA-SISTEMAS</b>
        </p>
        <b>REF.:</b> Trámite de Convalidación<br>
        <p class="referencia">
            <b>{{$nombre["nombreEst"]}}</b>
        </p>
    </div>
    <p class="tabla">
        <b class="dedonde">DE: CARRERA_ANTIGUA UNIVERSIDAD_PREVIA</b><br>
        <b class="adonde">A: {{$nombre["Carrera"]}} UNIVERSIDAD MAYOR DE SAN SIMÓN</b>
    </p>
    <p class="cuerpo">
        Habiendo revisado la solicitud de convalidación de {{$nombre["pronombre"]}} universitari{{$nombre["generoGramatical"]}}
        de referencia, informo a usted, que no se encontró materia para convalidar en el pensum de la carrera, por lo tanto no
        procede.<br><br>
        Es cuanto informo para fines consiguientes.
    </p>
    <center>
    <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}<br>
    </p>
    </center>
    
</body>

</html>