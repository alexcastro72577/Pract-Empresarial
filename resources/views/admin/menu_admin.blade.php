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
    .anun{
      margin-top:80px;
      margin-left:40px;
      margin-bottom:50px;
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
    .anota{
      margin-top:50px;
      margin-left:70px;
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
      <div class="anun">
        <div>
          <img src="../imagenes/fe3.png" style="width:12%; margin-left:40px">
        </div>
        <button type="button" class="btn btn-primary a" id="b1" onclick="location='/form_egreso'">Certificado Finalizacion<br> de Estudios</button>
      </div>
      <div class="anota">
        <div>
          <img src="../imagenes/lista.png" style="width:10%; margin-left:15px">
        </div>
        <button type="button" class="btn btn-primary b"  onclick="location='/gestionInfo'" id="b3">Gestionamiento<br> de Informacion</button>
      </div>
    </div>
  </div>
</body>
@endsection