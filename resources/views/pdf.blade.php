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
        .encabezado{
            font-size: 30px;
            margin-top: 60px;
            margin-bottom: 30px;
        }
        .saludo{
            font-size: 20px;
            margin-left: 400px;
            margin-top: 30px;
            margin-bottom: 5px;
            line-height: 300%;
        }
        .cuerpo{
            font-size: 15px;
            margin-left: 400px;
            margin-right: 400px;
            margin-top: 5px;
            margin-bottom: 20px;
        }
        .despedida{
            font-size: 15px;
            margin-left: 400px;
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
        <br>El suscrito, Director de la Carrera de Licenciatura en {{$carrera}},
        <br><b>C E R T I F I C A:</b>
    </p>

    <p class="cuerpo"><br>Que {{$pronombre}} <b>Univ. {{$nombre}}</b> con <b>C.I: {{$ci}} {{$exp}}</b>, ha  aprobado {{$numMaterias}}
        materias del Plan de Estudios de la Carrera de Licenciatura en {{$carrera}}, hasta la gestión {{$gestion}}/{{$anio}} 
        faltándole la materia de {{$materiaEgreso}} para la conclusión, por lo tanto está habilitad{{$generoGramatical}} para cualquier
        modalidad de titulación.
    </p>

    <p class="despedida"><br>Es cuanto se informa a solicitud de {{$pronombre}} interesad{{$generoGramatical}} para fines consiguientes.</p>

    <center>
        <p class="fecha" id="current_date"> 
         

        
            <script>
                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                document.getElementById("current_date").innerHTML = "Cochabamba, " + new Date().toLocaleDateString('es-ES', options);
            </script>
        

        </p>

        <p class="firma">{{$director}}
        <br><b>DIRECTOR CARR. a.i. {{$carrera}}</b></p>
    </center>

</body>

</html>