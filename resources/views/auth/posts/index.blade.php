@extends('layouts.auth')

@section('title', 'Administrar Noticias')

@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/website/plugins/datatables/jquery.dataTables.min.css') }}" />
@endsection

@section('section')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Noticias </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Noticias</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Todas</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="container btn-addnew">
                <a href="{{ route('posts.create') }}" type="submit" class="btn btn-gradient-primary me-2">Nueva Noticia</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (count($posts) > 0)
                            <table id="news-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th> Image </th>
                                        <th> Title </th>
                                        <th> Description </th>
                                        <th> Creado </th>
                                        <th> Status </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="py-1">
                                                <img src="{{ $post->gallery->image }}" alt="image" />
                                            </td>
                                            <td> {{ $post->title }} </td>
                                            <td>
                                                {!! limitHtml($post->description, 10, '...') !!}
                                            </td>
                                            <td> {{ date('d M Y', strtotime($post->created_at)); }} </td>
                                            <td class="text-center check-status-column">
                                                @if ($post->is_published == 1)
                                                    <span class="mdi mdi-check"></span>
                                                @else
                                                    <span class="mdi mdi-close"></span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                                                <a href="" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>
                                                <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-primary text-center" role="alert">
                                No hay noticias
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/website/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#news-table').DataTable();
        });
    </script>
@endsection