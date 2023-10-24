@extends('layouts.app')

@section('header')
<nav class="bg-white py-4">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-2">
            <img src="tu_logo.png" alt="Logo" class="h-8 w-8">
            <span class="text-xl font-semibold text-green-500">SysCertificate</span>
        </div>
        <div class="lg:flex items-center space-x-4 hidden">
            <a href="" class="text-gray-600 hover:text-green-500">Home</a>
            <a href="" class="text-gray-600 hover:text-green-500">About</a>
            <a href="" class="text-gray-600 hover:text-green-500">Admin</a>
            <div class="border-l h-6 border-gray-300"></div>
            <a href="#" class="text-gray-500 hover:text-green-500">
                <i class="fab fa-facebook fa-2x"></i>
            </a>
            <a href="#" class="text-gray-500 hover:text-green-500">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
        </div>
        <div class="lg:hidden">
            <!-- Agregar un botón para abrir el menú en dispositivos móviles -->
            <button id="mobile-menu-button" class="text-gray-600 hover:text-green-500">
                <i class="fas fa-bars fa-2x"></i>
            </button>
        </div>
    </div>
</nav>

  
@endsection
@section('content')


    <!-- Hero Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold mb-4">Bienvenido a la Plataforma de Certificados</h1>
            <p class="text-lg text-gray-500 mb-8">Genera y consulta tus certificados de cursos en línea</p>
    
            <div class="flex flex-col items-center space-y-8">
                <div class="p-4 rounded-md">
                    <form action="" method="GET" class="flex flex-col items-center md:items-start md:flex-row space-y-4 md:space-x-4">
                        @csrf
                        <div class="w-64 md:w-auto flex-1">
                            <input type="text" name="dni" class="w-full py-2 px-4 rounded-lg" placeholder="Ingresa tu DNI o Carnet de Identidad">
                        </div>
                        <button type="submit" class="bg-green-500 text-white w-full md:w-auto px-4 py-2 rounded-lg hover:bg-green-600">Buscar</button>
                    </form>
                </div>
                <!-- Espacio adicional debajo del formulario -->
                {{-- <div class="h-8"></div> --}}
            </div>
            
        </div>
        
        
    </section>
    <div class="bg-gradient-to-b from-white to-green-200 p-8 rounded-md text-center w-full max-h-100">
                   
    </div>
    
    
    
    
    
    
    



    <!-- Services Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-8">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-md p-6 shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Generación de Certificados</h3>
                    <p class="text-gray-600">Genera fácilmente tus certificados en línea y ahorra tiempo en el proceso de emisión.</p>
                </div>
                <div class="bg-white rounded-md p-6 shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Consulta de Certificados</h3>
                    <p class="text-gray-600">Accede a tus certificados en cualquier momento y desde cualquier lugar.</p>
                </div>
                <div class="bg-white rounded-md p-6 shadow-lg">
                    <h3 class="text-xl font-semibold mb-4">Soporte 24/7</h3>
                    <p class="text-gray-600">Nuestro equipo de soporte está disponible las 24 horas, los 7 días de la semana para ayudarte en lo que necesites.</p>
                </div>
            </div>
        </div>
    </section>
        <!-- About Section -->
        <section class="bg-white py-16">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                    <div class="md:order-2">
                        <h2 class="text-3xl font-semibold mb-4">Acerca de Nosotros</h2>
                        <p class="text-gray-600 leading-relaxed">Somos una plataforma líder en la generación y gestión de certificados de cursos en línea. Nuestra misión es simplificar y agilizar el proceso de emisión y consulta de certificados.</p>
                    </div>
                    <div class="md:order-1">
                        <img src="https://via.placeholder.com/400x300" alt="Acerca de Nosotros" class="rounded-md shadow-lg">
                    </div>
                </div>
            </div>
        </section>

    <!-- Testimonials Section -->
    <section class="bg-blue-900 text-white py-16">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold text-center mb-8">Lo que dicen nuestros clientes</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <div class="bg-white p-6 rounded-md shadow-lg">
                        <p class="text-gray-600 text-lg">"Excelente plataforma. La generación de certificados es rápida y sencilla. ¡Muy recomendada!"</p>
                    </div>
                </div>
                <div>
                    <div class="bg-white p-6 rounded-md shadow-lg">
                        <p class="text-gray-600 text-lg">"Gracias a esta plataforma, nunca he tenido problemas para obtener mis certificados de cursos. ¡Increíble servicio!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

