<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <a class="navbar-brand text-center" href="/">Concienciación</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @auth
          
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Mostrar formularios</a>
        </div>
      </div>
      @endauth
    </div>
  </nav>