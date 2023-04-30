@props(['datos'])
@extends('components.master')

@section('title') | FAQs @endsection

@section('main')

<div class="container my-5">
  <h1 class="d-flex justify-content-center my-5" >Preguntas frecuentes</h1>
  <a class="col-3  justify-content-center btn btn-primary" href="{{ route('faqs.create') }}">Añadir preguntas</a>
@foreach ( $datos as $dato )

<div class="col-10 my-3 ">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button  class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <strong>
          {{ $dato->titulo }}
        </strong>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>{{ $dato->descripcion }}</strong>
          <br> 
{{$dato->respuesta}}
        </div>
      </div>
    </div>
  </div>
  @auth
    
  @endauth
  <div class="d-flex my-3">
    <a  class="mx-3 justify-content-center btn btn-outline-secondary" href="{{ route('faqs.show', $dato->id) }}">Modificar  pregunta</a>
    <a href="{{ route('faqs.delete', $dato) }}" class="justify-content-center btn btn-outline-danger">Eliminar  pregunta</a>
  </div>
</div>
      @endforeach()
@endsection