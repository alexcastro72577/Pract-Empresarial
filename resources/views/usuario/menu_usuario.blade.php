@extends('adminlte::page')
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link href="CSS/MenuVertical.css" rel="stylesheet">
    <link href="../Librerias/css2/Est.css" rel="stylesheet">
    <linh href="img" rel="stylesheet">
    <style>
    .user_format{
      background-image:url(/imagenes/tech.png), url(/imagenes/logo.jpeg);
      background-size: 45rem, 5rem
    }
    .Est{
      margin-left:600px;
      margin-top: 100px
    }
    
    </style>
</head>
<body>
  <div>
      <br>
      <h2 class="Est">BIENVENIDO</h2>
      <h2 class="user_format"></h2>
  </div>
</body>
@endsection