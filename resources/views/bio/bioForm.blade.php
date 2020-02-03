@extends('master.master')

@section('pageTitle','Pagina formulario')

@section('header')
@include('template.header')
@endsection


@section('content')
<form action="{!! url('/store'); !!}" method="post">
    @csrf   
    <div class="row">
        <div class="col"></div><div class="col"></div>
        <div class="form-group col">
            <label for="name">Nom</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col"></div><div class="col"></div>
    </div>
    <div class="row">
        <div class="col"></div><div class="col"></div>
        <div class="form-group col">
            <label for="birthdate">Data de neixement</label>
            <input type="date" class="form-control" id="birthdate" name="birthdate">
        </div>
        <div class="col"></div><div class="col"></div>
    </div>
    <button type="submit" class="btn btn-success" style="text-align: center;">Submit</button>
</form>
@endsection


@section('footer')
@include('template.footer')
@endsection