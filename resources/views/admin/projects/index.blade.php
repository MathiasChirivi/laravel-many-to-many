@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        @foreach ($projects as $project)
        <div class="col-4">
            <div class="card mt-3" style="height: 25rem;">
                <div class="card-body h-25">
                    <h5 class="card-title"><strong>Nome del progetto:</strong> {{ $project->title }}</h5>
                    <p class="card-text"><strong>Descrizione del progetto:</strong> {{ $project->description }}</p>
                    <p class="card-text"><strong>Nome repository:</strong> {{ $project->repository }}</p>
                    @if ($project->tipe)
                        <p>Tipo di progetto: {{ $project->tipe->name }} </p>
                    @else
                        <p>Non esiste alcuno tipo per questo progetto</p>
                    @endif 
                    <p>Tecnologia:</p>
                    @forelse ($tecnologys ?? [] as $tecnology)
                        <span> {{$tecnology->name}} </span>
                    @empty
                        <span>Nessuno</span>
                    @endforelse
                    <a href="{{ route("admin.projects.show",$project ) }}" class="btn btn-dark">View details</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>

@endsection