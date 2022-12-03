@extends('layouts.app')

@include('utilities.navbar')

 <!-- Boton arriba -->

<div class="go-top-container">
    <div class="go-top-button">
        <i class="bi bi-chevron-up"></i>
    </div>
</div>





<div class="container-fluid menubar">
  <div class="row2 altura2">
    
    <div class="column">
        <a class="test" href="#Historia">
      <img src="img/1.jpg" alt="image-name">
      <div class="text-block">
        <div class="text-wrap">
          <h1>name</h1>
        </div>
      </div>
      </a>
    </div>

    <div class="column">
      <a class="test" href="#Mision">
      <img src="img/4.jpg" alt="image-name">
      <div class="text-block">
        <div class="text-wrap">
          <h1>name</h1>
        </div>
      </div>
      </a>
    </div>

    <div class="column">
      <a class="test" href="#Vision">
      <img src="img/3.jpg" alt="image-name">
      <div class="text-block">
        <div class="text-wrap">
          <h1>name</h1>
        </div>
      </div>
      </a>
    </div>

    <div class="column">
      <a class="test" href="#Valores">
      <img src="img/4.jpg" alt="image-name">
      <div class="text-block">
        <div class="text-wrap">
          <h1>name</h1>
        </div>
      </div>
      </a>
    </div>

  </div>
</div>






 <!-- Historia -->
    <div class="container espacio1" id="Historia">
        <div class="row align-items-start">
           
               <div class="col-sm-5 ">
                <h1>Historia</h1>
                    <p class="parramarg">En Iyolosiwa nos interesa tu opinión. Llena los campos y nos pondremos en contacto contigo lo antes posible </p>
                    <br>
                    <h2>Teléfono </h2>
                     <ul class="list-unstyled pl-md-5 mb-5">        
                        <li class="d-flex text-black mb-2"><h2><i class="bi bi-telephone-fill mr-3"></i></h2>        <p>+1 (222) 345 6789</p></li>       
                    </ul>
                    <br>
                     <h2>Correo </h2>
                     <ul class="list-unstyled pl-md-5 mb-5">        
                        <li class="d-flex text-black mb-2"><h2><i class="bi bi-envelope-fill mr-3"></i></h2>        <p>cciyolosiwaleón@gmail.com</p></li>       
                    </ul>
                    <br>
                     <h2>Dirección </h2>
                     <ul class="list-unstyled pl-md-5 mb-5">        
                        <li class="d-flex text-black mb-2"><h2><i class="bi bi-geo-alt-fill mr-3"></i></h2>        <p>Calle Apodaca Los Herrera &, Nuevo Leon, 37208 León, Gto.</p></li>       
                    </ul>
              </div>




            <div class="col-sm-7 ">
   <main class="main">
                <section class="galeriahis">
                    <figure class="galeria_h galeria_h--g1">
                        <img src="{{ asset('img/nosotros/1.jpg') }}" class="galeria_historia">
                 
                </section>
            </main>            </div>

         
        </div>
    </div>


    @section('contentFooter')
    @include('utilities.footer')
@endsection