@extends('layouts.master')
@section('contenu')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="card ">
        <div class="card-header">
            <h3 class="card-title">Ajout d'articles</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close ml-1" data-dismiss="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
            </button>
            <strong>{{ $message }}</strong>
        </div>
        @endif
        <form action="{{ route('articles.update',$articles->id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div class="card-body container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-xs-12">
                        <input type="hidden" name="articleId" value="{{ $articles->id }}">
                        <div class="form-group">
                            <label>Titre de l'article</label>
                            <input type="text" class="form-control" value='{{ $articles->titre }}' name="titre" placeholder="Entrer l'article">
                            {!! $errors->first('titre', '<small class="text-danger">:message</small>') !!}
                        </div>
                        <div class="form-group">
                            <label>Contenu de l'article</label>
                            <textarea type='text' name="contenu" value='{{  $articles->contenu }}' id="summernote"></textarea>
                            {!! $errors->first('contenu', '<small class="text-danger">:message</small>') !!}
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-12">
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add
                                Image</button>
                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' src="{{asset('image').'/'.$articles->photo}}" name="photo" onchange="readURL(this);" accept="image/*" />
                                {!! $errors->first('photo', '<small class="text-danger">:message</small>') !!}
                                <div class="drag-text">
                                    <h3>Ajouter une Photo</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" alt="your image" />
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Retirer <span class="image-title">Uploaded Image</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection