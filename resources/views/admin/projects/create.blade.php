@extends('layouts.admin')

@section('title', 'Create new Project')

@section('main-content')




<section class="container">
    <div class="col-12">


        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3 input-group">
                <label for="name_project" class="input-group-text">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome" value="{{ old('nome') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="author" class="input-group-text">Descrizione:</label>
                <input class="form-control" type="text" name="descrizione" id="descrizione" value="{{ old('descrizione') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="date" class="input-group-text">Giorni:</label>
                <input class="form-control" type="text" name="giorni" id="giorni" value="{{ old('giorni') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="image" class="input-group-text">Linguaggi usati:</label>
                <input class="form-control" type="text" name="linguaggi_usati" id="linguaggi_usati" value="{{ old('linguaggi_usati') }}">
            </div>

            <div class="mb-3 input-group">
                <label for="linguaggio_usato" class="input-group-text">Repo url:</label>
                <input class="form-control" type="text" name="repo_url" id="repo_url" value="{{ old('repo_url') }}">
            </div>

            <div class="mb-3  input-group">
                    <button class="btn btn-sm btn-success mx-1">
                        Edit
                    </button>
            </div>
            <div class="mb-3  input-group">
                <button type="reset" class="btn btn-xl btn-warning">
                    Elimina nuovo progetto
                </button>
            </div>
        
        
        </form>
        

@endsection