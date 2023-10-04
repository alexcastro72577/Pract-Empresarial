@extends('layouts.app')

@section('content')

<head>
    <style>
    </style>
</head>
<body class="formato_admin">
    <div class="container">
        <h2>Menú Administrador</h2>
        <form class="form_horizontal" method="post" action="{{url('/admin')}}" enctype="multipart/form-data">
        @csrf
            Nueva Carrera: <input type="text" class="ncarrera" name="nombrecarrera" value="" required>
            <span class="error">* </span>
            <br><br>
            Nueva Materia de Egreso: <input type="text" class="nmateria" name="nombmateg" value="" required>
            <span class="error">* </span>
            <br><br>
            Nuevo Director de Carrera: <input type="text" class="ndirector" name="nombredirector" value="" required>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary">Guardar Datos</button>
        </form>
    </div>
</body>
@endsection
