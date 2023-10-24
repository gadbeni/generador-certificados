@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    <div class="container" data-aos="fade-up">
        <div class="hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="assets/img/hero-img.svg" alt="" class="img-fluid">
        </div>
        <div class="hero-info" data-aos="zoom-in" data-aos-delay="100">
            <h2>Consulta<br><span>El Certificado</span><br>de tu curso</h2>
            <div>
                <form action="" method="GET">
                    <div class="input-group">
                        <input type="text" name="ci" class="form-control input-search" placeholder="Ingresa tu Carnet de Identidad">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default btn-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!-- End Hero Section -->
<!-- ======= About Section ======= -->
<section id="about">
    <div class="container" data-aos="fade-up">

        <header class="section-header">
            <h3>Acerca de Nosotros</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </header>

        <div class="row about-container">

            <div class="col-lg-6 content order-lg-1 order-2">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bi bi-card-checklist"></i></div>
                <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bi bi-brightness-high"></i></div>
                <h4 class="title"><a href="">Magni Dolores</a></h4>
                <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                <h4 class="title"><a href="">Dolor Sitema</a></h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>

            </div>

            <div class="col-lg-6 background order-lg-2" data-aos="zoom-in">
                <img src="assets/img/about-img.svg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
<section id="services" class="section-bg">
    <div class="container" data-aos="fade-up">
        <header class="section-header">
            <h3>Nuestros Servicios</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </header>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                    <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="box">
                    <div class="icon"><i class="bi bi-card-checklist" style="color: #e9bf06;"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>
  
            <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                    <div class="icon"><i class="bi bi-bar-chart" style="color: #3fcdc7;"></i></div>
                    <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="200">
                <div class="box">
                    <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
            </div>  
        </div>
    </div>
</section><!-- End Services Section -->

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

