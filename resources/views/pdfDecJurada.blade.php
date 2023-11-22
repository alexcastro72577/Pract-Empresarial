<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .titulo{
            font-size: 14px;
            margin-top: 50px;
            margin-bottom: 10px
        }
        .texto1{
            font-size: 10px;
            text-align: justify
        }
        .relleno{
            font-size: 10px;
            color: #FFFFFF;
        }
        .texto{
            font-size: 10px;
        }
        .text_footer{
            font-size: 10px;
            text-align: justify
        }
        .texto_aviso{
            margin-top: 10px;
            margin-bottom: 10px;
            color: #FFFFFF;
        }
        .table{
            font-size: 10px;
            margin-right: 50px;
            width: 70%
        }
        .cargo{
            text-align: right
        }
        .centro{
            text-align: center
        }
        .th,td{
            border: 1px solid #000;
            font-size: 10px 
        }
    </style>
</head>

<body>

    <h1 class='titulo'>
    <center>
        <b>FORM-DCA-FORM-08<br>
        UNIVERSIDAD MAYOR DE SAN SIMÓN</b><br>
        DIRECCIÓN DE PLANIFICACIÓN ACADEMICA<br>
        DEPARTAMENTO DE PERSONAL ACADÉMICO
    </center>
    </h1>
    <span class='texto1'>
        <b>DECLARACIÓN JURADA DE PERCEPCIÓN DE REMUNERACIÓN EN EL SECTOR PÚBLICO</b> <b class='relleno'>aaaaaaaa</b> <b>Fecha de llenado:</b><b class='relleno'>aaaaaa</b>{{ $nombre['dia']}}/{{ $nombre['mesNum']}}/{{ $nombre['año']}}
    </span>
    <table class="th">
        <tr>
        <td>Yo {{ $nombre['nombreTutor']}} {{ $nombre['nombDocente']}}<b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</b></td>
        </tr>
    </table>
    <table>
        <tr>
            <td><b class='relleno'>a</b>Con No. C.I.<b class='relleno'>aaaaaaaa</b></td>
            <td><b class='relleno'>a</b>{{ $nombre['ci']}} {{ $nombre['exp']}}<b class='relleno'>aaaaaaaaaaaa</b></td>
            <td><b class='relleno'>a</b>DECLARO en el mes de:<b class='relleno'>aaaaaa</b></td>
            <td><b class='relleno'>a</b>{{ $nombre['mesTexto']}}<b class='relleno'>aaaaaaaaaaaa</b></td>
            <td><b class='relleno'>a</b>de la GESTIÓN {{ $nombre['año']}}<b class='relleno'>aaaaaaaaaaaa</b></td>
        </tr>
    </table>
    <span class='texto'>PERCIBIR LAS SIGUIENTES REMUNERACIÓNES EN EL SECTOR PÚBLICO:</span>
    <br>
    <span class='texto'><b>A.- UNIVERSIDAD MAYOR DE SAN SIMÓN</b></span>
    <table>
        <tr>
            <td><b>CATEGORÍA/CARGO</b></td>
            <td><b>REMUNERACIÓN<br>(EN Bs)</b></td>
            <td><b>FECHA<br>SERVICIO</b></td>
        </tr>
        <tr>
            <td>1) Docente</td>
            <td>{{ $nombre['remuneracion']}}</td>
            <td>{{ $nombre['mesServicio']}}</td>
        </tr>
        <tr>
            <td>2) Administrativo</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>3) Curso Intersemestral (Invierno o Verano)</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>4) Programa de Titurlación de Alumnos PTAANG</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>5) Exámen de Ingreso</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>6) Exámen de Grado</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>7) Consultoría en línea</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>8)Consultoría por producto</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>9) Asesoría de Tesis</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>10) Posgrado (docencia, tutoria virtual, apoyo logístico, tribunal, tutor, diseño de módulo/programa, coordinador de programa, coordinación de área y otros)</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td>11) Otros</td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td><b>TOTAL:</b></td>
            <td class='centro'> - </td>
            <td class='centro'> - </td>
        </tr>
    </table>
    <span class='text_footer'>
        IMPORTANTE.- En el caso de los ITEMS 1 y 2 (docentes y administrativos) se considera el total ganado mensual independientementedel tipo de contrato
        (indefinido, plazo fijo o servicios) en el caso de los servicios comprendidos del ITEM 3 al ITEM 10, se considera la remuneración de las fechas que se ha efectuado el 
        servicio sin considerar si éste ya ha sido pagado o no. No debe incluirse el servicio para el cual se firma la presente declaración.
    </span>
    <br>
    <b class='texto_aviso'>.</b>
    <span class='texto'><b>B.- INSTITUCIÓN PÚBLICA I</b></span>
    <table>
        <tr>
            <td><b class='relleno'>a</b>Nombre de la Institución Pública<b class='relleno'>aaa</b></td>
            <td><b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b></td>
            <td class='centro'> </td>
            <td><b class='relleno'>aaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaa</b></td>
        </tr>
        <tr>
            <td class='cargo'>Cargo:<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
            <td><b class='relleno'>a</b>Total, Ganado (Bs.):<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
        </tr>
    </table>
    <span class='texto'><b>C.- INSTITUCIÓN PÚBLICA II</b></span>
    <table>
        <tr>
            <td><b class='relleno'>a</b>Nombre de la Institución Pública<b class='relleno'>aaa</b></td>
            <td><b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b></td>
            <td class='centro'> </td>
            <td><b class='relleno'>aaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaa</b></td>
        </tr>
        <tr>
            <td class='cargo'>Cargo:<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
            <td><b class='relleno'>a</b>Total, Ganado (Bs.):<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
        </tr>
    </table>
    <span class='texto'><b>D.- INSTITUCIÓN PÚBLICA III</b></span>
    <table>
        <tr>
            <td><b class='relleno'>a</b>Nombre de la Institución Pública<b class='relleno'>aaa</b></td>
            <td><b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b></td>
            <td class='centro'> </td>
            <td><b class='relleno'>aaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaa</b></td>
        </tr>
        <tr>
            <td class='cargo'>Cargo:<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
            <td><b class='relleno'>a</b>Total, Ganado (Bs.):<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
        </tr>
    </table>
    <span class='texto'><b>E.- RENTA DE JUBILACIÓN</b></span>
    <table>
        <tr>
            <td><b class='relleno'>a</b>Nombre de la Institución Pública<b class='relleno'>aaa</b></td>
            <td><b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaa</b></td>
            <td class='centro'> </td>
            <td><b class='relleno'>aaaaaaaaaaa</b>-<b class='relleno'>aaaaaaaaaaa</b></td>
        </tr>
        <tr>
            <td class='cargo'>Cargo:<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
            <td><b class='relleno'>a</b>Total, Ganado (Bs.):<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td><b class='relleno'>a</b>SUMAS TOTALES:<b class='relleno'>aaa</b></td>
            <td class='centro'> - </td>
        </tr>
    </table>
    <span class='text_footer'>
        NOTA. -  EL MONTO DECLARADO CORRESPONDE AL TOTAL GANADO (NO AL LIQUIDO PAGABLE) ES DECIR AL MONTO PERCIBIDO ANTES DE
        DEDUCCIONES, APORTES LABORALES E IMPUESTOS SE CONSIDERA INSTITUCION PUBLICA A TODA AQUELLA QUE SE ENCUENTRA COMPRENDIDA EN LOS 
        ARTICULOS 3, 4 Y 5 DE LA LEY 1178 DEL 20 DE JULIO DE 1990.
    </span>
    <br>
    <b class='texto_aviso'>.</b>
    <table>
        <tr>
            <td><b class='relleno'>a</b>FIRMA:<b class='relleno'>a</b></td>
            <td> <br><b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</b> </td>
            <td><b class='relleno'>a</b>ACLARACIÓN DE LA FIRMA:<b class='relleno'>a</b></td>
            <td class='centro'>{{ $nombre['nombreTutor']}} {{ $nombre['nombDocente']}}</td>
        </tr>
        <tr>
            <td><b class='relleno'>a</b>No. C.I. o Pasaporte:<b class='relleno'>a</b></td>
            <td><b class='relleno'>a</b>{{ $nombre['ci']}}</td>
            <td><b class='relleno'>a</b>Expedido en: {{ $nombre['exp']}}<b class='relleno'>a</b></td>
            <td> <b class='relleno'>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</b> </td>
        </tr>
    </table>
    <table class="th">
        <b>Declaro bajo juramento que los datos arriba consignados son fidedignos y corresponden fielmente a la verdad, en
        conscuencia, asumo responsabilidad de lo declarado.</b>
    </table>
    
</body>

</html>
