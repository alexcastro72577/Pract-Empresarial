@extends('layouts.app')
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="CSS/MenuVertical.css" rel="stylesheet">
    <link href="../Librerias/css2/Est.css" rel="stylesheet">
    <linh href="img" rel="stylesheet">
    <style>
    .admin_format{
        font-family: Consolas;
        background-image:url(/imagenes/Dooku.png), url(/imagenes/logo.jpeg);
        background-size: 45rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: 820px 110px , 0px 400px;
    }
    .Est{
      margin-left:300px;
    }
    .certificado{
      margin-top:80px;
      margin-left:40px
    }
    .nombramiento{
      margin-left:40px;
    }
    .informe{
      margin-left:40px;
    }
    .a{
      height:50px;
      width:210px;
      padding:2px;
      border-radius: 10px;
      box-shadow: 5px 5px 10px gray;
      background-color: #51A9FF;
      border-color: #51A9FF
    }
    .gestion{
      margin-left:70px
    }
    .b{
      height:50px;
      width:150px;
      padding:2px;
      border-radius: 10px;
      box-shadow: 5px 5px 10px gray;
      background-color: #51A9FF;
      border-color: #51A9FF
    }
    </style>
</head>
<body class="admin_format">
<div class="Est">
    <h2>MENU ADMINISTRADOR</h2>
      <div class="certificado">
        <button type="button" class="btn btn-primary a" id="b1" onclick="location='/form_egreso'">Certificado Finalizacion<br> de Estudios</button>
      </div>
      <br><br>
      <div class="nombramiento">
        <button type="button" class="btn btn-primary a" id="b1" onclick="location='/nombtutor'">Nombramiento<br>de Tutor</button>
      </div>
      <br><br>
      <div class="informe">
        <button type="button" class="btn btn-primary a" id="b1" onclick="location='/inf_conv'">Informe de<br>Convalidación</button>
      </div>
      <br><br>
      <div class="gestion">
        <button type="button" class="btn btn-primary b"  onclick="location='/gestionInfo'" id="b3">Gestionamiento<br> de Informacion</button>
      </div>
    </div>
  </div>
</body>
@endsection