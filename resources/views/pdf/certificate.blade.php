
<div class="table-responsive">
    <div class="container-certificate" id="container-certificate">
        <img src="{{asset("storage/"."$course->img_certificate")}}" alt="">
        {{-- <img src="https://previews.123rf.com/images/kitipol/kitipol1609/kitipol160900173/63887549-plantilla-de-certificado-diploma-dise%C3%B1o-tama%C3%B1o-a4-vector.jpg" alt=""> --}}
        <div id="movable-div">
            <p>{{$person->first_name}} {{$person->last_name}}</p>
        
        </div>
    
    </div>
</div>
<style>
    @import url({{$course->font->font_url}});
    *{
        margin: 0;
        padding: 0;
    }
    .container-certificate {
        position: relative;
        width: 297mm; /*Ancho de una hoja A4 horizontal*/ 
        height: 210mm; /*Altura de una hoja A4 horizontal */
        background-size: cover; /* Ajusta la imagen al tamaño del contenedor */
        background-position: center center; /* Centra la imagen en el contenedor */
        display: flex;
        align-items: center;
        justify-content: center;/*1049*595*/
    }
    .container-certificate img{
        width: 100%;
        height: 100%;
    }
    #movable-div {
        position: absolute;
        width: 100%;
        /* left: {{ $course->x }}px; */
        left: 0;
        top: {{ $course->y }}px; 
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
    }
    #movable-div p{
        text-align: center;
        font-size: {{$course->font_size}}px;
        font-family: {{$course->font->font_name}};
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const movableDiv = document.getElementById("movable-div");
        console.log("hola");
        const container = document.getElementById("container-certificate");
        /* container.style.backgroundImage = ``; */

        /* movableDiv.style.transform = `translateX(${x}px) translateY(${rangeY.value}px)`; */
        
    });
    function convertBackslashesToSlashes(inputText) {
        /* // Utiliza el método replace con una expresión regular para reemplazar todas las barras invertidas por barras inclinadas */
        var outputText = inputText.replace(/\\/g, '/');
        return outputText;
    }

</script>