@extends('layouts.app')
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="CSS/MenuVertical.css" rel="stylesheet">
    <link href="../Librerias/css2/Est.css" rel="stylesheet">
    <linh href="img" rel="stylesheet">
</head>
<body>
<div class="Est">
      <div class="anun">
        <div>
          <img src="../imagenes/fe3.png" style="width:10%">
        </div>
        <button type="button" class="btn btn-primary" id="b1" onclick="location='/form_egreso'">Certificado Finalizacion de Estudios</button>
      </div>
      <div class="anota">
        <div>
          <img src="../imagenes/lista.png" style="width:10%">
        </div>
        <button type="button" class="btn btn-primary"  onclick="location='/gestionInfo'" id="b3">Gestionamiento de Informacion</button>
      </div>
    </div>
  </div>
</body>
@endsection