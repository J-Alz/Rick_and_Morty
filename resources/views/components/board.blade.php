@extends('welcome')

@section('content')
<div class="container-board">
    @foreach ($characters as $character)
        <div class="card" href="">
            <img src="{{ $character['image'] }}" alt="" class="card-img" >
            <span class="card-span"><strong>{{ $character['name'] }}</strong></span>
            <span class="card-span">{{ $character['status'] }}</span>
            <span class="card-span">{{ $character['species'] }}</span>
            <a href="{{ route('characterDetail',['id' => $character['id']]) }}" class="btn-card" >Ver Personaje</a>
        </div>
    @endforeach
</div>

@endsection