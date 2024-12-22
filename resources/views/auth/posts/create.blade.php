@extends('layouts.auth')

@section('title', 'Crear Noticia')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/summernote/summernote.min.css') }}">
@endsection

@section('section')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Noticias </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Noticias</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Crear Noticia</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crear Noticia</h4>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('posts.store') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Titulo" value="{{ old('title') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="category">Categoria</label>
                                <select class="form-control" id="category" name="category" required>
                                    <option value="" disabled selected>Seleccione una categoria</option>
                                    @if (count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option @selected(old('category') == $category->id) value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="is_published">Publicar</label>
                                <select class="form-control" id="is_published" name="is_published" required>
                                    <option value="" disabled selected>Seleccione una opcion</option>
                                    <option @selected(old('is_published') == 1) value="1">Si</option>
                                    <option @selected(old('is_published') == 2) value="2">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Cargar Imagen</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" name="file" class="form-control file-upload-info" placeholder="Cargar Imagen" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
                                <textarea id="summernote" class="form-control" name="description" minlength="10" required>{{ old('description') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary me-2">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/website/plugins/summernote/summernote.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection