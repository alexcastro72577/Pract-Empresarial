@extends('layouts.app')
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="CSS/MenuVertical.css" rel="stylesheet">
    <link href="../Librerias/css2/Est.css" rel="stylesheet">
    <linh href="img" rel="stylesheet">
    <style>
    .user_format{
      font-family: Consolas;
      background-image:url(/imagenes/tech.png), url(/imagenes/logo.jpeg);
      background-size: 45rem, 5rem;
      background-repeat: no-repeat, no-repeat;
      background-position: 820px 110px , 0px 400px;
    }
    .Est{
      margin-left:330px
    }
    .certificado{
      margin-top:150px;
      margin-left:10px
    }
    .infconv{
      margin-left:10px
    }
    .nombtut{
      margin-left:10px
    }
    .btn{
      height:50px;
      width:210px;
      padding:2px;
      border-radius: 10px;
      box-shadow: 5px 5px 10px gray;
      background-color: #51A9FF;
      border-color: #51A9FF
    }
    </style>
</head>
<body class="user_format">
<div class="Est">
    <h2>MENU SECRETARI@</h2>
      <div class="certificado">
        <button type="button" class="btn btn-primary" id="b1" onclick="location='/form_egreso'">Certificado Finalizacion<br> de Estudios</button>
      </div>
      <br><br>
      <div class="nombtut">
        <button type="button" class="btn btn-primary" id="b1" onclick="location='/nombtutor'">Nombramiento<br>de Tutor</button>
      </div>
      <br><br>
      <div class="infconv">
        <button type="button" class="btn btn-primary" id="b1" onclick="location='/inf_conv'">Informe de<br>Convalidación</button>
      </div>
</div>
</body>
@endsection