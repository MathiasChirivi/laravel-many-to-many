@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h2>Vista dettaglio post</h2>
        <h1>{{  $project->title }}</h1>
        <h3>Categoria: {{$project->tipe ? $project->tipe->name : "Senza Tipe"}} </h3>
        <ul>
            @foreach ($project->technologies as $technology)
            <li class="list-unstyled">
                <h4>Tecnologia usata:  {{$technology->name}}</h4>
                
            </li>            
            @endforeach
        </ul>
        <p>{{  $project->description }}</p>
        <h2>{{  $project->repository }}</h2>
    </div>
    <a href="{{ route("admin.projects.edit",$project ) }}" class="btn btn-dark">Modifica il progetto</a>
    <div>
        <form id="deleteForm" action="{{ route('admin.projects.destroy', $project) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Cancella il progetto">
        </form>
    </div>
</div>

@endsection