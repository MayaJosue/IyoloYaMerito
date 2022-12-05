@extends('layouts.app')

@section('contentNavBar')
    @include('utilities.navbar')
@endsection

@section('content')

         <!-- Boton arriba -->

        <div class="go-top-container">
            <div class="go-top-button">
                <i class="bi bi-chevron-up"></i>
            </div>
        </div>


        

        <!-- Swiper -->
       
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                
               <div class="swiper-slide" >
                    <img src="img/Inicio/112.jpg">
                </div>
                <div class="swiper-slide" >
                    <img src="img/Inicio/p2.jpg">
                </div>
                <div class="swiper-slide" >
                    <img src="img/Inicio/p3.jpg">
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Nosotros -->



        <div class="container espacio1">
       
            <div class="row align-items-start">
                <div class="col-sm-4 ">
                    <h1>Nosotros</h1>

                </div>
                <div class="col-sm-8 ">
                    <p>Iyolosiwa está conformado por facilitadoras: Hilda, Mary, Julia; actores de aprendizaje: niñas, niños, adolescentes y madres de familia; y Servicio Social por parte de la Ibero León y La Universidad De La Salle, además de alumnos de preparatoria del Instituto Jassá.  </p>
              
                    <p>El trabajo realizado dentro de la institución consiste en acompañamiento psicológico individual y familiar, regularizaciones en actividades escolares, talleres disciplinarios y psicoeducativos, juegos cooperativos y el espacio de ludoteca que ayuda en la motricidad y desarrollo cognitivo de los niños y niñas. </p>

                     
                </div>
            </div>
        </div>








       <section id="gallery">
            <div class="container">
                 <div class="row">
                    
                        <h2>Noticias</h2>
                          <div class="col-lg-4 mb-4">
                              <div class="card">
                                  <img src="img/inicio/noticia1.jpg"  class="card-img-bottom" alt="">
                                  <div class="card-body">
                                    <h5 class="card-title">Reinauguración</h5>
                                    <p class="card-text">Reinauguración del Centro Comunitario Iyolosiwa León A.C, en Los Herrera #201, col. Nuevo león, en el mes de febrero.</p>
                                   <a href="" class="btn btn-warning btn-sm">Leer mas</a>
                                  </div>
                                  </div>
                            </div>

                             <div class="col-lg-4 mb-4">
                              <div class="card">
                                  <img src="img/inicio/pt3.jpg" alt="" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Consultorio medico interdisciplinario </h5>
                                    <p class="card-text">Proyecto interdisciplinario de salud, en donde doctores, nutriólogos, psicólogos y fisioterapeutas trabajaran para mejorar la salud de familias de la colonia Nuevo León.  Inicio en febrero. </p>
                                   <a href="" class="btn btn-warning btn-sm">Leer mas</a>
                                  </div>
                                  </div>
                            </div>

                             <div class="col-lg-4 mb-4">
                              <div class="card">
                                  <img src="img/inicio/noticias3.jpg" alt="" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Nueva sala de computación</h5>
                                    <p class="card-text">Construcción de la sala de computación Iyolosiwa para implementar cursos de herramientas básicas digitales para el año 2023.</p>
                                   <a href="" class="btn btn-warning btn-sm">Leer mas</a>
                                  </div>
                                  </div>
                            </div>
                    

                        <h2>Eventos</h2>
                             <div class="col-lg-4 mb-4">
                              <div class="card">
                                  <img src="img/inicio/e1.jpg"  class="card-img-bottom" alt="">
                                  <div class="card-body">
                                    <h5 class="card-title">Pastorela 2022</h5>
                                    <p class="card-text">Pastorela de los niños el día 9 de Diciembre a las 6:00 pm.</p>
                                   <a href="" class="btn btn-warning btn-sm">Leer mas</a>
                                  </div>
                                  </div>
                            </div>

                             <div class="col-lg-4 mb-4">
                              <div class="card">
                                  <img src="img/inicio/e2.jpg" alt="" class="card-img-top">
                                  <div class="card-body">
                                    <h5 class="card-title">Rosca de reyes 2023</h5>
                                    <p class="card-text">Partida de rosca de reyes, 6 de enero de 2023.</p>
                                   <a href="" class="btn btn-warning btn-sm">Leer mas</a>
                                    
                                  </div>
                                  </div>
                            </div>

                             <div class="col-lg-4 mb-4">
                              
                            </div>
        
        
                </div>
            </div>
        </section>

      


        <!-- NuestroTrabajo -->
     
          
             
<div class="container espacio1">
<div class="row align-items-start">

    <div class="col-sm-4 ">
                    <h2>Nuestro trabajo</h2>
                    <br>
                  <p>El trabajo realizado dentro de la institución consiste en acompañamiento psicológico individual y familiar, regularizaciones en actividades escolares, talleres disciplinarios y psicoeducativos, juegos cooperativos y el espacio de ludoteca que ayuda en la motricidad y desarrollo cognitivo de los niños y niñas. </p>

                  <p>Aunado a lo anterior, la labor de la institución se basa en la formación de una red de apoyo que genera una comunidad en la que las personas se concientizan en el cuidado de sí mismos, el medio ambiente y los otros, ayudando a disminuir las problemáticas de la colonia.  </p>
    </div>
       
    <div class="col-sm-8 ">        
        <main class="main">
                <section class="galeriainicio">
                    <figure class="galeria_inicio galeria_inicio--g1">
                        <img src="{{ asset('img/inicio/i2.jpg') }}" class="galeria_in" >
                    </figure>
                    <figure class="galeria_inicio galeria_inicio--g2">
                        <img src="{{ asset('img/inicio/i4.jpg') }}" class="galeria_in">
                    </figure>
                    <figure class="galeria_inicio galeria_inicio--g3">
                        <img src="{{ asset('img/inicio/2.jpg') }}" class="galeria_in">
                    </figure>
                    <figure class="galeria_inicio galeria_inicio--g4">
                        <img src="{{ asset('img/inicio/pd5.jpg') }}" class="galeria_in">
                </section>
            </main>
       
    </div>
 <!-- Galeria -->
</div>
</div>
</div>



 <!-- Background image -->
  <div
    class=" text-center bg-image"
    style="
      background-image: url('img/wola4.jpg');
    

    "
  >
    <div class="mask col-sm-6" >
      <div class="  ">
        <div class=" text-white">
          <h2 class="mb-6">"Tus acciones hoy, mueven a un millón"</h2>
          <a class="btn btn-warning btn-lg"  href="{{ route('Donaciones') }}" role="button"
          >Donar</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->

@endsection

@section('contentFooter')
    @include('utilities.footer')
@endsection

