@extends('master.master')

@section('pageTitle','Pagina formulario')

@section('header')
@include('template.header')
@endsection


@section('content')
<form>
    <div class="form-group">
        <label for="nombreInput">Nombre</label>
        <input type="text" class="form-control" id="nombreInput" placeholder="Introduce tu nombre">
    </div>
    <div class="form-group">
        <label for="fechaInput">Fecha de nacimiento</label>
        <input type="date" class="form-control" id="fechaInput" placeholder="Introduce tu fecha de nacimiento">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


@section('footer')
@include('template.footer')
@endsection