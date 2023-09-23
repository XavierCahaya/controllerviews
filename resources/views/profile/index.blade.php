@extends('component.app')

@section('content')
    <div class="container mt-5">
        <div class="card border-5">
            <div class="card-body">
                <h1 class="card-title">Halo, salam kenal, namaku {{ $name }}</h1>
                <p class="card-text">Aku tinggal di {{ $location }}</p>
                <p class="card-text">Aku kuliah di {{ $campus }}</p>
                <p class="card-text">Aku tinggal di {{ $home }}</p>
                <p class="card-text">{{$hobby}}</p>
            </div>
        </div>
    </div>
@endsection