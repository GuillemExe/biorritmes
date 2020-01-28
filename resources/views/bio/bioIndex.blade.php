@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<h3>Esto es un content</h3>
<div class="row">
    <div class="offset-2 col-8">
        <p class="text-justify">La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
            animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes
            biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha
            comprobado estadísticamente que la energía física se comporta cíclicamente en
            periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en
            33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en
            una fase positiva, durante la cual las energías y las capacidades son altas.
        </p>
    </div>
</div>
@endsection


@section('footer')
@include('template.footer')
@endsection