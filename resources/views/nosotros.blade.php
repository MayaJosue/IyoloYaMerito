@extends('layouts.app')

@section('contentNavBar')
	@include('utilities.navbar')
@endsection

@section('content')


	
<!--<div class= "container-fluid altura">
	<div class="row altura">
		
		<div class="col altura">
			<a class="test" href="#Historia">
				<div class="card gallery__picture altura">
					<img src="{{ asset('img/manos.jpg') }}" class="card-img-top altura" alt="...">				
				</div>
			</a>
		</div>
		
		<div class="col altura">
			<div class="card gallery__picture altura">
				<img src="{{ asset('img/manos.jpg') }}" class="card-img-top altura" alt="...">				
			</div>
		</div>

		<div class="col altura">
			<div class="card gallery__picture altura">
				<img src="{{ asset('img/manos.jpg') }}" class="card-img-top altura" alt="...">				
			</div>
		</div>

		<div class="col altura">
			<div class="card gallery__picture altura">
				<img src="{{ asset('img/manos.jpg') }}" class="card-img-top altura" alt="...">				
			</div>
		</div>
	</div>
</div> -->

                 <!-- Boton arriba -->

<div class="go-top-container">
    <div class="go-top-button">
        <i class="bi bi-chevron-up"></i>
    </div>
</div>




  <!-- Galeria -->
    <main class="main">
   
      <section class="galeria">
        <figure class=" galeria_n galeria_n--g1">
         <img src="{{ asset('img/nosotros/n1.jpg') }}" class="nosotros__img"></a>
        </figure>
        <figure class="galeria_n2 galeria_n--g2">
          <img src="{{ asset('img/nosotros/n2.jpg') }}" class="nosotros__img">
        </figure>
        <figure class="galeria_n3 galeria_n--g3">
          <img src="{{ asset('img/nosotros/n3.jpg') }}" class="nosotros__img">
        </figure>
    
      </section>
    </main>
  <!-- Galeria -->





  <!-- Historia -->
    <div class="container espacio1" id="Historia">
        <div class="row align-items-start">
           
            <div class="col-sm-7 ">
   <main class="main">
                <section class="galeriahis">
                    <figure class="galeria_h galeria_h--g1">
                        <img src="{{ asset('img/nosotros/1.jpg') }}" class="galeria_historia">
                 
                </section>
            </main>            </div>

            <div class="col-sm-5 ">
                <h2>Historia</h2>
         <p class="parramarg">El Centro Comunitario Iyolosiwa Le??n comenz?? como una experiencia de Educaci??n Popular en la que se crearon salas de lectura para ni??os y ni??as, acompa??adas por las RSCJ, en el a??o 2000. Despu??s de 8 a??os, y a partir de las necesidades de la comunidad en donde sobresale la problem??tica del bajo nivel acad??mico, falta de comunicaci??n y valores, surge entonces en el a??o 2008 la Biblioteca, donde se comienza a trabajar buscando diferentes formas de dar soluci??n a los problemas resaltados. </p>

          <p>En el 2010 se implementa la Ludoteca quedando como Biblioteca Ludoteca <strong>???Tejiendo la Esperanza???</strong>  Con este proyecto se buscaba apoyar en tareas, regularizaci??n escolar, brindar un espacio seguro, de contenci??n y respeto, donde los padres de familia brindan la confianza al personal para educar a sus hijos/as. Estas actividades fueron acompa??adas poco a poco con la promoci??n de la lectura, diversas actividades recreativas y de convivencia familiar que eran organizadas por las animadoras del espacio.</p>

        <p>Al pasar de los a??os y las necesidades de la comunidad se diversificaron los servicios y la atenci??n a las personas, fue entonces que se ampli?? el trabajo con mujeres, j??venes, padres y madres de familia, apoyado por j??venes de Servicio Social que pertenecen a diferentes instituciones educativas. </p>

        <p>En el a??o 2019 y hasta la fecha est?? consolidado como Centro Comunitario Iyolosiwa Le??n A.C., Donde se siguen desarrollando las actividades que han sido la esencia de este espacio educativo y aumentado nuevos servicios y talleres que siguen surgiendo debido a las necesidades de nuestros usuarios.</p>
            </div>
        </div>
    </div>

    <!-- Mision -->
    <div class="container espacio2" id="Mision">
        <div class="row align-items-start">
            <div class="col-sm-5 ">
                <h2>Misi??n</h2>
                <p>Somos una asociaci??n civil, que desde la concepci??n y pr??ctica de la Educaci??n Popular, fortalece e impulsa procesos educativos comunitarios, que inciden en la transformaci??n de la realidad y posibilitan vida digna en sectores de mediana y alta marginalidad.</p>
                <br><br>
                <h2>Visi??n</h2>
                <p>Iyolosiwa A.C. es un referente institucional especializado en educaci??n popular que es reconocida por la calidad de su servicio educativo y su compromiso solidario con las mayor??as empobrecidas; cuenta con personal capacitado, quienes desarrollan proyectos y asesoran a grupos, organizaciones y redes; interviene de manera estrat??gica a nivel local y regional en M??xico; colabora y se articula con otras organizaciones en redes locales, nacionales e internacionales; cuenta con una estructura organizativa clara y funcional, as?? como con una administraci??n y finanzas s??lidas.</p>
            </div>
          
            <div class="col-sm-7  ">
            
                <main class="main">
                    <section class="galeriams">
                            <figure class="galeria_ms galeria_ms--g1">
                            <img src="{{ asset('img/nosotros/2.jpg') }}" class="galeria_mision">           
                    </section>
                </main>
            </div>
        </div>
    </div>

    <!-- Valores -->
    <div class="container espacio2" id="Valores">
        <div class="row align-items-start">
            <div class="col-sm-7 ">
                 <main class="main">
                    <section class="galeriams">
                        <figure class="galeria_ms galeria_ms--g1">
                        <img src="{{ asset('img/nosotros/3.jpg') }}" class="galeria_mision">
                     
                    </section>
                </main>             
            </div>
            <div class="col-sm-5 ">
                <h2>Valores</h2>
                <ol class="list-group list-group-numbered">
                  <li class="list-group-item">Confianza</li>
                  <li class="list-group-item">Apertura</li>
                  <li class="list-group-item">Discernimiento</li>
                  <li class="list-group-item">Coherencia</li>
                  <li class="list-group-item">Sentido de comunidad</li>
                  <li class="list-group-item">Justicia</li>
                  <li class="list-group-item">Equidad</li>
                  <li class="list-group-item">Esperanza</li>
                </ol>
            </div>
        </div>
    </div>



@endsection

@section('contentFooter')
	@include('utilities.footer')
@endsection
