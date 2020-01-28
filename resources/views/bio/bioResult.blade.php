@extends('master.master')

@section('pageTitle','Pagina resultado')

@section('header')
@include('template.header')
@endsection


@section('content')
<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
    </div>
</div>
@endsection


@section('footer')
@include('template.footer')
@endsection