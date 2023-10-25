@extends('layouts.app')

@section('content')

<head>
    <style>
    .formato_gestion{
        font-family: Consolas;
        background-image:url(/imagenes/gestion.png), url(/imagenes/logo.jpeg);
        background-size: 40rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: 820px 110px , 0px 400px;
    }
    .titulo{
        margin-top:50px;
        margin-left:80px
    }
    .form_horizontal{
        margin-top:100px;
        margin-bottom:100px
    }
    .ncarrera{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .nmateria{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .ndirector{
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .btn{
        margin-top:50px;
        margin-left:150px;
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF
    }
    </style>
</head>
<body class="formato_gestion">
    <a href="/admin" class="active">Regresar al menu</a>
    <div class="container">
        <h2 class="titulo">Gestión de Datos</h2>
        <form class="form_horizontal" method="post" action="{{url('/gestionInfo')}}" enctype="multipart/form-data">
        @csrf
            Nueva Carrera: <input type="text" class="ncarrera" name="nombrecarrera" value="" required>
            <span class="error">* </span>
            <br><br>
            Nueva Materia de Egreso: <input type="text" class="nmateria" name="nombmateg" value="" required>
            <span class="error">* </span>
            <br><br>
            Nuevo Director de Carrera: <input type="text" class="ndirector" name="nombreautoridad" value="" required>
            <span class="error">* </span>
            <br><br>
            <button type="submit" class="btn btn-primary">Guardar Datos</button>
        </form>
        
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Autoridades</th>
                    <th scope="col">Carreras</th>
                    <th scope="col">Materias de Egreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>      
                    <th scope="row">{{ $dato-> NOMBREAUTORIDAD }}</th>
                    <th scope="row">{{ $dato-> NOMBRECARRERA }}</th>
                    <th scope="row">{{ $dato-> NOMBMATEG }}</th>
                    <td>
                        <a href="{{url('gestionInfo/'.$dato-> id.'/edit' )}}" class = "btn">
                            Editar
                        </a>
                        <form action="{{url('gestionInfo/'.$dato-> id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Desea eliminar?')" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</body>
@endsection
