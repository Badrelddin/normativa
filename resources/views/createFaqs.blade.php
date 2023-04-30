@props(['datos'])
@extends('components.master')

@section('title') | FAQs @endsection

@section('main')

<div class="container">
    <div class="row">
        <div class="col my-5">
            <form method="POST" action="{{ route('faqs.create.post') }}" >
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label" >Título</label>
                  <input name="titulo" type="text" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Descripción</label>
                    <input name="descripcion" type="text" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Respuesta</label>
                    <input name="respuesta" type="text" class="form-control" id="exampleInputEmail1" value="" aria-describedby="emailHelp">
                  </div>
                <button type="submit" class="btn btn-primary">Crear</button>
              </form>
        </div>
    </div>
</div>
@endsection