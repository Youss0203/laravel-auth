@extends('layouts.admin')

@section('title', 'Creating a new post')

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7">
            @include('partials.errors')

            <form action="{{ route('admin.projects.update', $project)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" value="{{ old('nome', $project->nome)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="author" class="input-group-text">descrizione</label>
                    <input class="form-control" type="text" name="descrizione" id="descrizione" value="{{ old('descrizione', $project->descrizione)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Date:</label>
                    <input class="form-control" type="date" name="giorni" id="giorni" value="{{ old('giorni', $project->linguaggi_usati)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="post_image" class="input-group-text">Repo Url</label>
                    <input class="form-control" type="text" name="linguaggi_usati" id="linguaggi_usati" value="{{ old('linguaggi_usati', $project->linguaggi_usati)}}">
                </div>

                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Date:</label>
                    <input class="form-control" type="text" name="Repo_url" id="Repo_url" value="{{ old('Repo_url', $project->Repo_url)}}">
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-xl btn-primary">
                        Update post
                    </button>
                    <button type="reset" class="btn btn-xl btn-warning">
                        Reset all fields
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection