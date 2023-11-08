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
                                        return rowData[3] > '2023-02-22-24.00.00';
                                    }
                                },
                                {
                                    label: '2024',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] > '2023-11-00-24.00.00';
                                    }
                                },
                                {
                                    label: '30 to 40',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] <= 40 && rowData[4] >=30;
                                    }
                                },
                                {
                                    label: '40 to 50',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] <= 50 && rowData[4] >=40;
                                    }
                                },
                                {
                                    label: '50 to 60',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] <= 60 && rowData[4] >=50;
                                    }
                                },
                                {
                                    label: 'Over 60',
                                    value: function(rowData, rowIdx) {
                                        return rowData[3] > 60;
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
</body>
@stop
