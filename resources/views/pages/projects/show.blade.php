@extends('layouts.app')

@section('content')

    <div class="container" style="background-image: url('{{ $project->img }}'); height:200px;">
        <h1>{{ $project->title}}</h1>
        <h5>
            {{ $project->software }}
        </h5>
    </div>

    <div class="container">
        <p>
            {{ $project->description }}
        </p>
    </div>

    
@endsection