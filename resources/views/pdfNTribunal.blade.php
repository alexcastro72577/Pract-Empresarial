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
        .nombproy{
            text-transform: uppercase
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
        .espacio{
            margin-top: 100px
        }
    </style>
</head>

<body>

    <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}<br>
        <b>{{ $nombre["codigocarrera"]}}-DIR.TR {{ $nombre["codCite"]}}/{{ $nombre["anio"]}}</b>
    </p>
    <p class="encabezado">
        Señores:<br>
        {{ $nombre["tituloPrimerTR"]}} {{ $nombre["tribunal1"]}} {{ $nombre["nombrePrimerTR"]}}<br>
        {{ $nombre["tituloSegundoTR"]}} {{ $nombre["tribunal2"]}} {{ $nombre["nombreSegundoTR"]}}<br>
        {{ $nombre["tituloTercerTR"]}} {{ $nombre["tribunal3"]}} {{ $nombre["nombreTercerTR"]}}<br>
        <u>Presente</u>
    </p>
    <p class="referencia">
        <b>REF: <u>NOMBRAMIENTO DE TRIBUNALES</u></b>
    </p>
    <p class="cuerpo">
        De mi consideración:<br>
        <br>
        Me es grato comunicarles a Ustedes que, han sido designados Tribunales para la revisión del proyecto
        en modalidad de {{ $nombre["modalidad"]}} titulado: <b class="nombproy">"{{ $nombre["nombreProyecto"]}}"</b> realizado por
        {{$nombre["pronombre"]}} Universitari{{ $nombre["generoGramatical"]}} <b>{{$nombre["apellidoEst"]}} {{$nombre["nombreEst"]}}</b>
        de la carrera de Licenciatura en {{$nombre["Carrera"]}}.
        <br>
        En consecuencia, recomiendo dar cumplimiento a la <b>Resolución H. C. F. Nº104/2009</b> y a la vez solicitar a Uds. proceder
        a la revisión necesaria para posteriormente hacernos llegar su informe, para lo que adjuntamos una copia de su Proyecto y Perfil.
        <br>
    </p>
    <p class="despedida">
        Agradeciendo de antemano su colaboración, saludo a Ustedes.<br>
        <br>
        Muy atentamente,
    </p>
    <p class="firma">
        {{$nombre["directorCarrera"]}}<br>
        <b class="cargo">DIRECTOR CARRERA DE {{$nombre["Carrera"]}}</b>
    </p>

    <br><br>
    <p class="espacio"></p>
    <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}<br>
        <b>{{ $nombre["codigocarrera"]}}-DIR.TR {{ $nombre["codCite"]}}/{{ $nombre["anio"]}}</b>
    </p>
    <p class="encabezado">
        Señor{{ $nombre["genero_saludoPrimerTR"]}}:<br>
        {{ $nombre["tituloPrimerTR"]}} {{ $nombre["tribunal1"]}} {{ $nombre["nombrePrimerTR"]}}<br>
        <u>Presente</u>
    </p>
    <p class="referencia">
        <b>REF: <u>NOMBRAMIENTO DE TRIBUNALES</u></b>
    </p>
    <p class="cuerpo">
        De mi consideración:<br>
        <br>
        Me es grato comunicarle a Usted que, ha sido designad{{ $nombre["genero_gramaticalPrimerTR"]}} Tribunal para la revisión del proyecto
        en modalidad de {{ $nombre["modalidad"]}} titulado: <b class="nombproy">"{{ $nombre["nombreProyecto"]}}"</b> realizado por
        {{$nombre["pronombre"]}} Universitari{{ $nombre["generoGramatical"]}} <b>{{$nombre["apellidoEst"]}} {{$nombre["nombreEst"]}}</b>
        de la carrera de Licenciatura en {{$nombre["Carrera"]}}.
        <br>
        En consecuencia, recomiendo dar cumplimiento a la <b>Resolución H. C. F. Nº104/2009</b> y a la vez solicitar a Ud. proceder
        a la revisión necesaria para posteriormente hacernos llegar su informe, para lo que adjuntamos una copia de su Proyecto y Perfil.
        <br>
    </p>
    <p class="despedida">
        Al agradecer su colaboración saludo a Usted.<br>
        <br>
        Cordialmente,
    </p>
    <p class="firma">
        {{$nombre["directorCarrera"]}}<br>
        <b class="cargo">DIRECTOR CARRERA DE {{$nombre["Carrera"]}}</b>
    </p>

    <br><br>
    <p class="espacio"></p>
    <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}<br>
        <b>{{ $nombre["codigocarrera"]}}-DIR.TR {{ $nombre["codCite"]}}/{{ $nombre["anio"]}}</b>
    </p>
    <p class="encabezado">
        Señor{{ $nombre["genero_saludoSegundoTR"]}}:<br>
        {{ $nombre["tituloSegundoTR"]}} {{ $nombre["tribunal2"]}} {{ $nombre["nombreSegundoTR"]}}<br>
        <u>Presente</u>
    </p>
    <p class="referencia">
        <b>REF: <u>NOMBRAMIENTO DE TRIBUNALES</u></b>
    </p>
    <p class="cuerpo">
        De mi consideración:<br>
        <br>
        Me es grato comunicarle a Usted que, ha sido designad{{ $nombre["genero_gramaticalSegundoTR"]}} Tribunal para la revisión del proyecto
        en modalidad de {{ $nombre["modalidad"]}} titulado: <b class="nombproy">"{{ $nombre["nombreProyecto"]}}"</b> realizado por
        {{$nombre["pronombre"]}} Universitari{{ $nombre["generoGramatical"]}} <b>{{$nombre["apellidoEst"]}} {{$nombre["nombreEst"]}}</b>
        de la carrera de Licenciatura en {{$nombre["Carrera"]}}.
        <br>
        En consecuencia, recomiendo dar cumplimiento a la <b>Resolución H. C. F. Nº104/2009</b> y a la vez solicitar a Ud. proceder
        a la revisión necesaria para posteriormente hacernos llegar su informe, para lo que adjuntamos una copia de su Proyecto y Perfil.
        <br>
    </p>
    <p class="despedida">
        Al agradecer su colaboración saludo a Usted.<br>
        <br>
        Cordialmente,
    </p>
    <p class="firma">
        {{$nombre["directorCarrera"]}}<br>
        <b class="cargo">DIRECTOR CARRERA DE {{$nombre["Carrera"]}}</b>
    </p>

    <br><br>
    <p class="espacio"></p>
    <p class="fecha" id="current_date"> 
        Cochabamba, {{ $nombre["fechaActual"]}}<br>
        <b>{{ $nombre["codigocarrera"]}}-DIR.TR {{ $nombre["codCite"]}}/{{ $nombre["anio"]}}</b>
    </p>
    <p class="encabezado">
        Señor{{ $nombre["genero_saludoTercerTR"]}}:<br>
        {{ $nombre["tituloTercerTR"]}} {{ $nombre["tribunal3"]}} {{ $nombre["nombreTercerTR"]}}<br>
        <u>Presente</u>
    </p>
    <p class="referencia">
        <b>REF: <u>NOMBRAMIENTO DE TRIBUNALES</u></b>
    </p>
    <p class="cuerpo">
        De mi consideración:<br>
        <br>
        Me es grato comunicarle a Usted que, ha sido designad{{ $nombre["genero_gramaticalTercerTR"]}} Tribunal para la revisión del proyecto
        en modalidad de {{ $nombre["modalidad"]}} titulado: <b class="nombproy">"{{ $nombre["nombreProyecto"]}}"</b> realizado por
        {{$nombre["pronombre"]}} Universitari{{ $nombre["generoGramatical"]}} <b>{{$nombre["apellidoEst"]}} {{$nombre["nombreEst"]}}</b>
        de la carrera de Licenciatura en {{$nombre["Carrera"]}}.
        <br>
        En consecuencia, recomiendo dar cumplimiento a la <b>Resolución H. C. F. Nº104/2009</b> y a la vez solicitar a Ud. proceder
        a la revisión necesaria para posteriormente hacernos llegar su informe, para lo que adjuntamos una copia de su Proyecto y Perfil.
        <br>
    </p>
    <p class="despedida">
        Al agradecer su colaboración saludo a Usted.<br>
        <br>
        Cordialmente,
    </p>
    <p class="firma">
        {{$nombre["directorCarrera"]}}<br>
        <b class="cargo">DIRECTOR CARRERA DE {{$nombre["Carrera"]}}</b>
    </p>
    
</body>

</html>
