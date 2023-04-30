@extends('components.master')

@section('main')
<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
        
      }
      .abs-center {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .form {
        width: 450px;
      }

      section {
        background-image: url('https://files.badrweb.es/e.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>

    <!-- Jumbotron -->
    <div  class="container">
      <div class="abs-center">
        <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55);
        backdrop-filter: blur(30px);">
        <h2 class="text-center p-3">Inicio de sesión</h2>
        <div class="d-flex justify-content-center h-100">
          <img src="a.png"  alt="" srcset="">
        </div>
        <form action="{{ route('p.login') }}" method="post" class="p-3 my-3 form">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email address</label>
            <input type="email" name="email" class="form-control form-control-lg" />
          </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Password</label>
            <input type="password" name="password" class="form-control form-control-lg" />
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary my-3 ">Login</button>
          </div>
        </form>
      </div>
    </div>
    </div>
    <!-- Jumbotron -->

  </section>
  <!-- Section: Design Block -->

  @endsection