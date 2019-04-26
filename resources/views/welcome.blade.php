@extends('layouts.app')

@section('title', 'Bienvenido a Laravel')

@section('body-class', 'landing-page sidebar-collapse')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('img/profile_city.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="title">En esta App podras mantener tus Remesas Al Dia.</h1>
          <h4>Esta es una herramienta de desarrollo, la misma  estara creciendo poco a poco con el fin de poner a prueba los conocimiento aprendidos en Laravel.</h4>
          <br>
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
            <i class="fa fa-play"></i> ¿Como Funciona?
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="main main-raised">
    <div class="container">
      <div class="section text-center">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">¿Porque gestionar tus remesas con esta App?</h2>
            <h5 class="description">Actualmente no solo es tedioso sino tambien complicado poder realizar el cambio de moneda para muchas personas, es por eso que esta app ha sido creada. Para poder brindar comodidad, versatilidad y confianza a los usuarios de hoy en dia.</h5>
          </div>
        </div>
        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Atendemos tus inquietudes</h4>
                <p>Estamos atentos a tus inquietudes y necesidades, por esa razon contamos con un panel de contacto en el cual podremos contactarte bajo cualquier requerimiento que puedas tener.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Pagos Seguros</h4>
                <p>Contamos con un sistema de negocios el cual impide el fraude de transacciones, permitiendo que tu dinero siempre este seguro para una total tranquilidad.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Confidencialidad</h4>
                <p>Todos tus datos como numeros de cuentas, telefonos, contraseñas, permaneces resguardados por nuestra plataforma para asi impedir el robo de informacion por parte de personas ajenas a ella.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section text-center">
        <h2 class="title">Products</h2>

        <div class="team">
          <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4">
              <div class="team-player">
                <div class="card card-plain">
                  <div class="col-md-6 ml-auto mr-auto">
                    <img src="{{ $product->images()->first()->image }}" alt="Thumbnail Image" class="img-raised rounded-circle img-fluid">
                  </div>
                  <h4 class="card-title">{{ $product->name }}
                    <br>
                    <small class="card-description text-muted">{{$product->category->name}}</small>
                  </h4>
                  <div class="card-body">
                    <p class="card-description">{{ $product->description }}</p>
                  </div>
                  <div class="card-footer justify-content-center">
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-link btn-just-icon"><i class="fa fa-facebook-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="section section-contacts">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="text-center title">¿Alguna inquietud?</h2>
            <h4 class="text-center description">Puedes contactarnos dejando tu nombre y correo, seguidos de la pregunta que tengas. Esto llegara a nosotros inmediatamente y responderemos a tu solicitud a la brevedad. Recuerda que nuestra cartera de clientes es bastante grande y le daremos respuesta a todos los que soliciten nuestra asistencia.</h4>
            <form class="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tu Nombre</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Tu Email</label>
                    <input type="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleMessage" class="bmd-label-floating">Tu Mensaje</label>
                <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
              </div>
              <div class="row">
                <div class="col-md-4 ml-auto mr-auto text-center">
                  <button class="btn btn-primary btn-raised">
                    Enviar Mensaje
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>

@endsection

