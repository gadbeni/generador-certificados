<div class="table-responsive">
    <div class="container-certificate" id="container-certificate">
        <div id="movable-div">{{$person->first_name}} {{$person->last_name}}</div>
    </div>
</div>
<style>
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
        left: {{ $course->x }}px;
        top: {{ $course->y }}px; 
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const movableDiv = document.getElementById("movable-div");

        const container = document.getElementById("container-certificate")

        // movableDiv.style.transform = `translateX(${x}px) translateY(${rangeY.value}px)`;
    });
</script>