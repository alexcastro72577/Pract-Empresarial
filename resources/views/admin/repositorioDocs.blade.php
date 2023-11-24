@extends('adminlte::page')

@section('title', 'Repositorio')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/2.2.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.7.0/css/select.dataTables.min.css">


@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.datatables.net/searchpanes/2.2.0/js/dataTables.searchPanes.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.7.0/js/dataTables.select.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#tabla').DataTable({
                searchPanes: {
                    cascadePanes: true,
                    collapse: false,
                    clear: false
                },
                dom: 'Plfrtip',
                columnDefs: [
                    {
                        searchPanes: {
                            show: true
                        },
                        targets: [0]
                    },
                    {
                        searchPanes: {
                            show: true
                        },
                        targets: [1]
                    },
                    {
                        searchPanes: {
                            show: true,
                            options: [
                                {
                                    label: '2023',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] > '2023-01-01-24.00.00';
                                    }
                                },
                                {
                                    label: '2024',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] > '2024-01-01-24.00.00';
                                    }
                                },
                                {
                                    label: '2025',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] > '2025-01-01-24.00.00';
                                    }
                                },
                                {
                                    label: '2026',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] > '2026-01-01-24.00.00';
                                    }
                                }
                            ]
                        },
                        targets: [3]
                    }
                ],
                language: {
                    searchPanes: {
                        title: {
                            _: 'Filtros Seleccionados - %d',
                            0: 'Sin Filtro seleccionados',
                            1: 'Un filtro seleccionado'
                        }
                    },
                    "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
                }
            });
        } );
    </script>
@stop

@section('content')

<head>
    <style>
    .formato_gestion{
        font-family: Consolas;
        background-image:url(/imagenes/repo.png), url(/imagenes/logo.jpeg);
        background-size: 40rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: 400px 110px , 0px 400px;
    }
    .titulo{
        margin-top:50px;
        margin-left:350px
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
                    <th scope="col">Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($datos as $dato)
                <tr>      
                    <th scope="row">{{ $dato-> NOMBREEST }} {{ $dato-> APELLIDOEST }}</th>
                    <th scope="row">{{ $dato-> tipoDocumento }}</th>
                    <th scope="row"> <a href="Dokus/{{ $dato-> documento }}" target= "blank_" >{{ $dato-> documento }}</a></th>
                    <th scope="row">{{ $dato-> created_at }}</th>
                    <td>
                        <form action="{{url('repositorio/'.$dato-> id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Desea eliminar?')" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
                @foreach($infos as $info)
                <tr>      
                    <th scope="row"> N/A</th>
                    <th scope="row">{{ $info-> tipoDocumento }}</th>
                    <th scope="row"> <a href="Dokus/{{ $info-> documento }}" target= "blank_" >{{ $info-> documento }}</a></th>
                    <th scope="row">{{ $info-> created_at }}</th>
                    <td>
                        <form action="{{url('repositorio/'.$info-> id )}}" method="post" enctype="multipart/form-data">
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
@stop
