@extends('welcome')

@section('detail')
<section class="contenido-detail">
    <article class="detail">
        <img src="{{ $character['image'] }}" alt="">
        <div class="info">
            <span><strong>Nombre: </strong>{{ $character['name'] }}</span>
            <span><strong>Estado: </strong>{{ $character['status'] }}</span>
            <span><strong>Especie: </strong>{{ $character['species'] }}</span>
            <span><strong>Género: </strong>{{ $character['gender'] }}</span>
            <span><strong>Origen: </strong>{{ $character['origin'] }}</span>
        </div>
    </article>
</section>

@endsection