@extends('voyager::master')

@section('page_title', 'Agregar Certificado')

@section('content')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-certificate"></i>
            Certificado
        </h1>
    </div>
    <div class="container-fluid">
        <div class="panel panel-bordered">
            <div class="panel-heading">
                
            </div>
            <div class="panel-body">
                <div class="container-fluid">
                    <div class="row">
                        <form action="{{route('add_certificate', $course->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-md-12">
                                <label for="image">Selecciona una imagen:</label>
                                <input type="file" name="image" id="image" accept="image/*">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="range_x">Eje X:</label>
                                <input type="range" name="range_x" id="range_x" class="" min="0" max="1000" step="1" value="0">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="range_y">Eje Y:</label>
                                <input type="range" name="range_y" id="range_y" class="l" min="0" max="720" step="1" value="0">
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            
        </div>
        <div class="table-responsive">
            <div class="container-certificate" id="container-certificate">
                <div id="movable-div">Nombre De Ejemplo</div>
            </div>
        </div>
        @foreach ($course->students as $student)
            <p>{{ $student->first_name }} {{ $student->last_name }}
                <a href="{{ route('show_certificate', ['id_course' => $course->id, 'id_person' => $student->id]) }}">Ver certificado</a>
            </p>
        @endforeach
        
    </div>
@endsection
@section('css')
    <style>
        /* .container-certificate {
            position: relative;
            width: 200px;
            height: 100px;
            background-color: lightblue;
            display: flex;
            align-items: center;
            justify-content: center;
        } */
        .container-certificate {
            position: relative;
            width: 297mm; /* Ancho de una hoja A4 horizontal */ 
            height: 210mm; /* Altura de una hoja A4 horizontal*/ 
            background-image: none; /* Por defecto sin imagen de fondo */
            background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
            background-position: center center; /* Centra la imagen en el contenedor */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        #movable-div {
            position: absolute;
            top: 0;
            left: 0;
            text-align: center;
            font-size: 2rem;
            font-weight: 500;
        }
    </style>

    
@endsection
@section('js')

@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const xInput = document.getElementById("eje_x");
        const yInput = document.getElementById("eje_y");

        const rangeX = document.getElementById("range_x");
        const rangeY = document.getElementById("range_y");
        const movableDiv = document.getElementById("movable-div");

        const container = document.getElementById("container-certificate")
        const imageInput = document.getElementById("image")

        console.log(xInput);

        rangeX.addEventListener("input", updatePositionX);
        rangeY.addEventListener("input", updatePositionY);

        imageInput.addEventListener("change",function(){
            const file = imageInput.files[0];
            if(file){
                const imageUrl = URL.createObjectURL(file);
                container.style.backgroundImage = `url(${imageUrl})`;
            }else {
                container.style.backgroundImage = "none";
            }
        });


        function updatePositionX() {
            const x = rangeX.value;
            movableDiv.style.transform = `translateX(${x}px) translateY(${rangeY.value}px)`;
        }

        function updatePositionY() {
            const y = rangeY.value;
            movableDiv.style.transform = `translateX(${rangeX.value}px) translateY(${y}px)`;
        }
    });
</script>
