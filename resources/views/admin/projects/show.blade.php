@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h2>Vista dettaglio post</h2>
        <h1>{{  $project->title }}</h1>
        <h3>Categoria: {{$project->tipe ? $project->tipe->name : "Senza Tipe"}} </h3>
        <p>{{  $project->description }}</p>
        <h2>{{  $project->repository }}</h2>
    </div>
    <a href="{{ route("admin.projects.edit",$project ) }}" class="btn btn-dark">Modifica il progetto</a>
</div>

@endsection