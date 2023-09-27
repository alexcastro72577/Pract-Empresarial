@extends('layouts.app')

@section('content')

    <body>
        <div class="container">
        <figure class="text-center">
            <h2>FORMULARIO FINALIZACION</h2>
            
        <form class="form-horizontal" method="post" action="{{url('/')}}" enctype="multipart/form-data">
            @csrf
            <font color="blue">Carrera:</font> <select name="Carrera">
                @foreach($carreras as $carrera)
                <option value="{{$carrera->NOMBRECARRERA}}">{{$carrera->NOMBRECARRERA}}</option>
                @endforeach
            </select>

            <span class="error">* </span>
            <br><br>
            <font color="blue">Gestion:</font> <select name="numGestion">
                <option value="I">I</option>
                <option value="II">II</option>
            </select>
            <span class="error">* </span>
            Año: <input type="text" name="anio" value="" required>
            <span class="error">* </span>
            <br><br>
            Nombre Completo: <input type="text" name="nombreEst" value="" required>
            <span class="error">* </span>
            <br><br>
            <font color="blue">Genero:</font> <select name="genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <br><br>
            C.I.: <input type="text" name="ci" value="" required>
            <span class="error">* </span>
            <font color="blue">Exp.:</font> <select name="exp">
                <option value="CBBA">CBBA</option>
                <option value="LPZ">LPZ</option>
                <option value="SCZ">SCZ</option>
                <option value="CHQ">CHQ</option>
                <option value="TJA">TJA</option>
                <option value="ORU">ORU</option>
                <option value="PND">PND</option>
                <option value="PSI">PSI</option>
                <option value="BNI">BNI</option>
            <span class="error">* </span>
            </select>
            <br><br>
            N° Materias Aprobadas: <input type="text" name="numMaterias" value="" required>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary">Enviar Tarea</button>  
        </form>
        </figure>
        </div>
    </body>
@endsection