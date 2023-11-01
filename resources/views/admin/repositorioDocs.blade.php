@extends('layouts.app')

@section('content')

<head>
    <style>
    .formato_gestion{
        font-family: Consolas;
        background-image:url(/imagenes/repo.png), url(/imagenes/logo.jpeg);
        background-size: 40rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: 400px 110px , 0px 400px;
        opacity: 1
    }
    .titulo{
        margin-top:50px;
        margin-left:250px
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
    <div class="container">
        <h2 class="titulo">Repositorio de Documentos Emitidos</h2>
        <table class="table table-striped table-dark" id="tabla">
            <thead>
                <tr>
                    <th scope="col">Universitario</th>
                    <th scope="col">Tipo de Documentacion</th>
                    <th scope="col">Documento</th>
                    <th scope="col">Fecha</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>      
                    <th scope="row">{{ $dato-> NOMBREEST }}</th>
                    <th scope="row">{{ $dato-> tipoDocumento }}</th>
                    <th scope="row"> <a href="Dokus/{{ $dato-> documento }}" target= "blank_" >{{ $dato-> documento }}</a></th>
                    <th scope="row">{{ $dato-> created_at }}</th>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    <script>
        var tabla = document.querySelector("#tabla");
        var dataTable = new DataTable(tabla);
    </script>
</body>
@endsection
