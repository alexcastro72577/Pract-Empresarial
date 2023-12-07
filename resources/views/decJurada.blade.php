@extends('adminlte::page')

@section('content')

    <head>
    <script>
    function hideShowDiv(val){
        if(val==2){
            document.getElementById('div').style.display='none';
        }
        if(val==1){
            document.getElementById('div').style.display='block';
        }
    }
    </script>
    <style>

    .formato_general{
        font-family: Consolas;
        background-image:url(/imagenes/Docu.png), url(/imagenes/logo.jpeg);
        background-size: 50rem, 5rem;
        background-repeat: no-repeat, no-repeat;
        background-position: right, center left;
    }
    .titulo{
        margin-left:250px
    }
    .segtitulo{
        margin-left: 270px
    }
    .form-horizontal{
        margin-top:70px;
        margin-bottom:100px;
        margin-left: 300px
    }
    .nombDocente{
        margin-left: 120px;
        width:250px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .remuneracion{
        margin-left: 10px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .CI{
        margin-left: 153px;
        width:90px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .seccionexp{
        margin-left: 40px
    }
    .exp{
        margin-left: 10px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .div{
        display: none
    }
    .nombInstitucion{
        margin-left: 12px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .cargo{
        margin-left: 138px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .monto{
        margin-left: 68px;
        width:90px;
        border-radius: 5px;
        border:2px solid;
        box-shadow: 5px 5px 10px gray
    }
    .b{
        margin-top:10px;
        margin-left:120px;
        border-radius: 10px;
        box-shadow: 5px 5px 10px gray;
        background-color: #51A9FF;
        border-color: #51A9FF
    }

    </style>
    </head>

    <body class="formato_general">
        <div class="container">

            <h2 class="titulo">FORMULARIO DE DECLARACIÓN JURADA</h2>
            <h2 class="segtitulo">DE PERCEPCIÓN DE REMUNERACIÓN</h2>
            
        <form class="form-horizontal" method="post" action="{{url('/dec_jur')}}" enctype="multipart/form-data">
            @csrf
            Docente: <select class="nombDocente" name="nombDocente">
                @foreach($tutores as $tutor)
                <option  value="{{$tutor->apellidosTutor}}">{{$tutor->titulo}} {{$tutor->apellidosTutor}} {{$tutor->nombresTutor}}</option>
                @endforeach
            </select>
            <span class="error">*</span>
            <br><br>
            Remuneración Percibida: <input type="number" class="remuneracion" name="remuneracion" value="" required>
            <span class="error">* </span>
            <br><br>
            C.I.: <input type="text" class="CI" name="ci" value="" required>
            <span class="error">* </span>
            <span class="seccionexp">Exp.: <select class="exp" name="exp">
                <option value="CBBA">CBBA</option>
                <option value="LPZ">LPZ</option>
                <option value="SCZ">SCZ</option>
                <option value="CHQ">CHQ</option>
                <option value="TJA">TJA</option>
                <option value="ORU">ORU</option>
                <option value="PND">PND</option>
                <option value="PSI">PSI</option>
                <option value="BNI">BNI</option>
            </select></spán>
            <span class="error">* </span>
            <br><br>
            <b>Percibe de un Instituto Público extra?</b>
            <br><br>
            <input type="radio" value="hide" onclick="hideShowDiv(1)" name="lang"> SI
            <input type="radio" value="hide" onclick="hideShowDiv(2)" name="lang"> NO
            <br><br>
            <div id="div" class="div">
                Nombre de la Institución:<input type="text" class="nombInstitucion" name="nombInstitucion" value="">
                <span class="error">* </span>
                <br><br>
                Cargo:<input type="text" class="cargo" name="cargo" value="">
                <span class="error">* </span>
                <br><br>
                Monto Percibido:<input type="number" class="monto" name="monto" value="">
                <span class="error">* </span>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary b">Generar Documento</button>  
        </form>
        </div>
    </body>
@endsection
