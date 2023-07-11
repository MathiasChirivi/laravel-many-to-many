@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h2>Vista dettaglio post</h2>
        <h1>{{  $project->title }}</h1>
        <p>{{  $project->description }}</p>
        <h2>{{  $project->repository }}</h2>
    </div>
</div>

@endsection