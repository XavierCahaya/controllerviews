@extends('component.app')

@section('content')
    <div class="container mt-5">
        <div class="card border-5">
            <div class="card-body">
                <h1 class="card-title">{{ $campusname }}</h1>
                <h5 class="card-text">{{ $campusname }} berada di {{ $location}}</h5>
                <p class="card-text">tepatnya di {{ $campuslocation }}</p>
                <h5 class="card-text">Fakultas {{ $campusname }}</h5>
                <p>{{ $fakultas}}</p>
            </div>
        </div>
    </div>
@endsection
