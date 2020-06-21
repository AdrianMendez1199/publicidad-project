@extends('layouts.app')


<style>
  .girl-info {
    color: #fff;
    position: absolute;
    bottom: 0;
    display: block;
    width: 100%;
  }
  .test { 
    text-align: center;
    display: block;
    width: 100%;
    background: rgba(254,90,203,0.4);
 }
</style>

@section('content')
<div class="container">
    @if(Session::has('error'))
    <div class="alert alert-danger">
      {{ Session::get('error')}}
    </div>
    @endif


    @if(Session::has('success'))
    <div class="alert alert-success">
      {{ Session::get('success')}}
    </div>
    @endif
    
    @foreach( $data as $article )
    
    @endforeach
    
    <div class="row border">

      <div class="col-12 text-center">
        <img src={{ asset("Img/LogoBlanco.png") }} alt="" class="">
        <button type="button" class="btn btn-outline-light btn-md btn-block" data-toggle="modal" data-target="#registro">
          Publicar
        </button>
      </div>

      <div class="col-12">
        <p class="m-4 text-light p-4">Atención: Este sitio contiene material adulto y es solo para mayores de edad. Lea cuidadosamente y preste conformidad para ingresar. Soy mayor de edad y/o tengo la edad legal para ver material para
          Se encuentra absolutamente en contra de la trata de personas y explotación sexual, conductas que constituyen delito y deben ser denunciadas.
          Las fotos que se exhiben en este sitio web son reales y pertenecen a personas mayores de edad que bajo su libre elección, libre determinación y exclusiva responsabilidad ejercen una actividad licita.
        Este sitio web no es una agencia de escors y/o acompañantes, no tiene ninguna relación laboral, profesional ni ningún otro vinculo con las personas publicadas.</p>
      </div>

      <div class="col-12">
        <!-- carrusel destacados-->
        <h3 class="text-center">Destacadas</h3>
        <div class="slider" style="background-image: url(Img/logo.jpg)" class="slider-img">
          <div><img class="slider-img" src={{ asset("Img/img1.jpg") }} alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img4.jpg") }}  alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img6.jpg") }}  alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img7.jpg") }}  alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img11.jpg") }}  alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img12.jpg") }}  alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img11.jpg") }}  alt=""></div>
          <div><img class="slider-img" src={{ asset("Img/img6.jpg") }}  alt=""></div>
        </div>
        <!-- Fin carrusel destacados-->
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-8 my-3">
        <div class="row mb-5">
            @foreach ($data as $key => $user)
            <a href={{ route('user-details', ['id' =>  $user->id]) }} target="_blank">
              <div class="card ml-2" style="width:235px">
                <img class="card-img" src={{$user->userimages[0]->file}} alt="Card image">
                
                <span class="girl-info">
                 <div class="test">
                 <span class="modelinfo-name">{{ $user->name }}</span> 
                   <div>
                     <span style="font-size:12px" 
                      class="modelinfo-location">Buenos Aires, Argentina
                    </span> 
                   </div>
                 </div>
                </span>
              </div>
            </a>
            @endforeach 
        </div>
      </div>
       
      <div class="col-4 my-3">
         @include('user.search')
      </div>
    </div>
  </div>

  <!-- Modal -->
  <form id="publish-form" enctype="multipart/form-data">
    @csrf 
  <div class="modal fade col-12" id="registro">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Publicar</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Formulario de registro -->

          <!-- Inicio Paso 1 -->
          <div class="row tab">
            <div class="col-12">
              <h4>Datos personales</h4>
            </div>
            <div class="col-sm-4 ">
              <div class="form-group">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="name">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Nacionalidad:</label>
                <input type="text" class="form-control" name="nacionality">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Correo electrónico:</label>
                <input type="email" class="form-control" name="email">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" class="form-control" autocomplete="off" name="password">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Whatsapp:</label>
                <input type="text" class="form-control" name="whatsapp">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Altura:</label>
                <input type="text" class="form-control" placeholder="1,70" name="height">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Color de pelo:</label>
                <input type="text" class="form-control" name="hair_color">
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Color de ojos:</label>
                <select name="eye_color"  class="form-control">
                  <option value="">Elegí</option>
                  <option value="Negro">Negro</option>
                  <option value="caucasica">Caucásica</option>
                </select>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="form-group">
                <label>Etnicidad:</label>
                <select name="ethnicity"  class="form-control">
                  <option value="">Elegí</option>
                  <option value="Caucásica">Caucásica</option>
                  <option value="Caucásica">Caucásica</option>
                  <option value="Caucásica">Caucásica</option>
                  <option value="Caucásica">Caucásica</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                  <label>Fecha Nacimiento: </label>  
                  <input type="text" id="datepicker" name="date_of_birth" class="form-control">
              </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label> Genero: </label>
                    <select name="gender" class="form-control">
                      <option value="mujer">Mujer</option>
                      <option value="hombre">Hombre</option>
                      <option value="gay">Gay</option>
                      <option value="transexual">Transexual</option>
                    </select>
                </div>
              </div>

             <div class="col-6">
              <div class="form-group">
                <label>Descripción:</label>
                <textarea name="description" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label><b>Medidas:</b></label>
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Busto:</label>
                      <input type="text" name="bust" class="form-control text-center" placeholder="90">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>Cintura:</label>
                      <input type="text" name="waist" class="form-control text-center" placeholder="60">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>Cadera:</label>
                      <input type="text" name="hip" class="form-control text-center" placeholder="90">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <h5>Zona de cobertura:</h5>
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label>País:</label>
                      <select name="country" id="country"  class="form-control">
                        <option value="">Elegí</option>
                        @foreach ($countries as $country)
                         <option value={{ $country->id }}> {{ $country->country }}</option>   
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Provincia:</label>
                      <select name="province" id="province"  class="form-control">
                        <option value="">Elegí</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label>Barrio:</label>
                      <select name="neighborhood"  class="form-control">
                        <option value="">Elegí</option>
                        <option value="Belgrano">Belgrano</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <p class="d-inline-block">Disponibilidad para viajar?:</p>
                    <div class="form-check d-inline-block">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="travels" value="Y" checked> SI
                      </label>
                    </div>
                    <div class="form-check d-inline-block">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="travels" value="N"> NO
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Fin Paso 1 -->

          <!-- Inicio Paso 2 -->
          <div class="row tab">
            <div class="col-12">
              <h4>Subi tus fotos:</h4>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto1">Foto 1:</label>
                <input type="file" class="form-control-file" id="filename1" name="filename1">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto2">Foto 2:</label>
                <input type="file" class="form-control-file" id="filename2" name="filename2">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto3">Foto 3:</label>
                <input type="file" class="form-control-file" id="filename3" name="filename3">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto4">Foto 4:</label>
                <input type="file" class="form-control-file" id="filename4" name="filename4">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto5">Foto 5:</label>
                <input type="file" class="form-control-file" id="filename5" name="filename5">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label for="foto6">Foto 6:</label>
                <input type="file" class="form-control-file" id="filename6" name="filename6">
              </div>
            </div>
          </div>
          <!-- Fin Paso 2 -->

           <!-- Inicio Paso 3 -->
          <div class="row tab">
            <div class="col-6">
              <h5>Plan:</h5>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="plan" value="outstanding" checked> 
                  Destacado - USD $40
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="plan" value="stardar"> 
                  Standar - USD $10
                </label>
              </div>
            </div>
            <div class="col-6">
              <h5>Medio de pago</h5>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="pago" value="tc" > 
                  Tarjeta de crédito
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="pago" value="paypal" checked> 
                  Paypal
                </label>
              </div>
            </div>
          </div>
          <!-- Fin Paso 3 -->

          <div style="overflow:auto;">
            <div style="float:right;">
              <button class="btn btn-primary" type="button" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
              <button class="btn btn-primary" type="button" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
            </div>
          </div>
  

          <!-- 
          Círculos que indican los pasos del formulario: -->
          <div style="text-align:center; margin-top:5px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
          </div>

        </div>
        <!-- Fin Formulario de registro -->
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div> -->
      </div>
    </div>
  </div>
</form>
  

  <footer class="main-footer">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-12 col-md-5">
          <a href="">Terminos y condiciones</a>
        </div>

        <div class="col-12 col-md-5 text-right">
          <h4>Copyright</h4>
        </div>
      </div>
    </div>
   </footer>


@endsection

@section('scripts')
<script>
  $(document).ready(function(){
    $('#datepicker').datepicker();

    $('.slider').slick({
      dots: true,
      autoplay: true,
      slidesToShow: 4,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 500,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        }
      ],
    });

    $("#country").change(function(e) {
      e.preventDefault();
      $("#province").html('<select name="province" id="province"  class="form-control"><option value="">Elegí</option> </select>');
      var id  = $(this).val();

      if(id) {
        $.ajax({
          url: "/country/provinces/" + id,
          type: 'GET',
          success:function(resp) {
           if(resp) {
             for(i=0; i < resp[0].length; i++) {
              $("#province").append("<option value="+resp[0][i].id+">"+ resp[0][i].province +"</option>")
             }
           }
          }
        })
      }
    })

    $("#province").on("change", function(e){
      e.preventDefault();
      console.log('TEST')
    })
  });
</script>
@endsection
