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
    </style>
    <!-- Jumbotron -->
    <div
  class="bg-image d-flex justify-content-center align-items-center"
  style="background-image: url('https://img.freepik.com/free-vector/gradient-grainy-texture_23-2148976749.jpg?w=1380&t=st=1682630611~exp=1682631211~hmac=491fc4a0588bd3cd6594a98bd7d62c314703eca45b63e758eabfbd517bf5b375');
        height: 100vh;">
    <div class="container py-4">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right" style="
              background: hsla(0, 0%, 100%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5">Iniciar sesión</h2>
              <img src="a.png" class="w-30 rounded-4 shadow-4">
              <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" />
                  <label class="form-label" for="form3Example3">Email</label>
                </div>
  
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" />
                  <label class="form-label" for="form3Example4">Contraseña</label>
                </div>
    
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Iniciar sesión
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

  @endsection