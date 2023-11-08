<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .fecha{
            text-align: right;
            font-size: 15px;
            margin-top: 100px;
            margin-bottom: 80px;
            margin-right: 50px;
        }.encabezado{
            font-size: 15px;
            margin-top: 80px;
            margin-bottom: 50px;
            margin-left: 50px;
        }
        .referencia{
            text-align: right;
            font-size: 15px;
            margin-right: 100px;
            margin-top: 25px;
            margin-bottom: 80px;
        }
        .cuerpo{
            text-align: justify;
            font-size: 15px;
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 25px;
        }
        .despedida{
            text-align: justify;
            font-size: 15px;
            margin-left: 50px;
            margin-right: 50px;
            margin-bottom: 100px;
        }
        .firma{
            font-size: 15px;
            margin-left: 50px;
            margin-top: 100px;
        }
        .cargo{
            font-size: 15px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}<br>
        <b>{{ $nombre["codigocarrera"]}}-DIR.T {{ $nombre["codCite"]}}/{{ $nombre["anio"]}}</b>
    </p>
    <p class="encabezado">
        Señor:<br>
        {{ $nombre["tutor"]}}<br>
        <u>Presente</u>
    </p>
    <p class="referencia">
        <b>Ref: <u>Nombramiento de Tutor</u></b>
    </p>
    <p class="cuerpo">
        De mi consideración:<br>
        <br>
        Por la presente, comunico a Ud. que, a solicitud de{{$nombre["pronombre"]}} Universitari{{ $nombre["generoGramatical"]}} 
        <b>{{$nombre["apellidoEst"]}} {{$nombre["nombreEst"]}}</b>
        de la Carrera de Licenciatura en {{$nombre["Carrera"]}}, ha sido designado(a) Tutor del Proyecto de Grado titulado:
        <b>"{{ $nombre["nombreProyecto"]}}"</b>.<br>
        <br>
        En consecuencia agradeceré a usted, se sirva colaborar a{{$nombre["pronombre"]}} mencionad{{$nombre["generoGramatical"]}}
        estudiante en el desarrollo del trabajo.<br>
    </p>
    <p class="despedida">
        Agradeciendo de antemano su colaboración, me despido reiterando mis consideraciones más distiguidas.<br>
        <br>
        Atentamente,
    </p>
    <p class="firma">
        {{$nombre["directorCarrera"]}}<br>
        <b class="cargo">DIRECTOR CARRERA DE {{$nombre["Carrera"]}}</b>
    </p>
    
</body>

</html>