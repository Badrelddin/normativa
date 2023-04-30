@extends('components.master')

@section('main')
<div class="container my-5">
    <div class="row">
        <div class="col-8">
            <form class="row g-3">
                <div class="col-lg-6 col-md-12">
                    <label  class="form-label">Nombre</label>
                    <input  name="" type="text" class="form-control" placeholder="Juan Bautista Domingo" >
                  </div>
                  <div class="col-lg-6 col-md-12">
                      <label  class="form-label">Correo</label>
                      <input  name="" type="email" class="form-control" placeholder="juan.bautista@gmail.com" >
                    </div>
                    <div class="col col-md-12">
                      <label  class="form-label">Address</label>
                      <input  name="" type="text" class="form-control"  placeholder="Calle Gran Capitán N 10">
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <label  class="form-label">Fecha de nacimiento</label>
                      <input  name="" type="date" class="form-control" >
                    </div>
                <div class="col-lg-6 col-md-12">
                  <label  class="form-label">Ciclo</label>
                  <select name=""  id="inputState" class="form-select">
                    <option selected>Desarrollo de Aplicaciones Web</option>
                    <option>...</option>
                  </select>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Enviar formulario</button>
                </div>
              </form>
        </div>
    </div>
</div>


@endsection
