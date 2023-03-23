@extends('layouts.page')

@section('content')
<div class="container">
<div class="row gx-5">
<div class="col-12 col-lg-4 p-4">
  <div class="course-card">
    <div class="course-card-img"></div>
    <div class="course-card-content p-3">
      <h3>Equipos</h3>
      <a class="btn btn-dark" href="{{ route('equipos.index') }}">Equipos</a>
    </div>
  </div>

  <div class="course-card">
    <div class="course-card-img"></div>
    <div class="course-card-content p-3">
      <h3>Jugadores</h3>
      <a class="btn btn-dark" href="{{ route('jugadors.index') }}">Jugadores</a>    
    </div>
  </div>

  

</div>
  <div class=" col-12 col-lg-4 p-4">
  <div class="course-card">
    <div class="course-card-img"></div>
    <div class="course-card-content p-3">
      <h3>Partidos</h3>
      <a class="btn btn-dark" href="{{ route('partidos.index') }}">Partidos</a>
    </div>
  </div>

  <div class="course-card">
    <div class="course-card-img"></div>
    <div class="course-card-content p-3">
      <h3>Vocalia</h3>
      <a class="btn btn-dark" >Vocalia</a>
    </div>
  </div>

</div>
  <div class="col-12 col-lg-4 p-4">
  <div class="course-card">
    <div class="course-card-img"></div>
    <div class="course-card-content p-3">
      <h3>Calendario</h3>
      <a class="btn btn-dark" href="{{ route('calendarios.index') }}">Calendario</a>
    </div>
  </div>

  <div class="course-card">
    <div class="course-card-img"></div>
    <div class="course-card-content p-3">
      <h3>Presidente Equipos</h3>
      <a class="btn btn-dark" href="{{ route('presidente_equipos.index') }}" >Presidente Equipos</a>
    </div>
  </div>
  
</div>
</div>
@endsection