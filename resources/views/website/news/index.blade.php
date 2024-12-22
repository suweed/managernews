@extends ('layouts.website')

@section('title', 'Noticias y Actividades')

@section ('content')
    <section class="page-title news-backgroud">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1>Noticias y Actividades</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                            <div class="post">
                                <h3 class="post-title">
                                    <a href="{{ route('news.single', $post->id) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="post-meta">
                                    <ul>
                                        <li>
                                            <i class="ion-calendar"></i> {{ date('d M Y', strtotime($post->created_at)); }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-media post-thumb">
                                    <a href="blog-single.html">
                                        <img src="{{ $post->gallery->image }}" alt="">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <div> {!! limitHtml($post->description, 150, '...') !!} </div>
                                    <div><a href="{{ route('news.single', $post->id) }}" class="btn btn-main">Saber M&aacute;s</a></div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="widget-latest-post-wrap">
                            <div class="widget-latest-post-item">
                                <h5>No hay noticias publicadas</h5>
                            </div>
                        </div>
                    @endif

                    {{ $posts->links('pagination.default') }}
                </div>
                <div class="col-lg-4">
                    <div class="pl-0 pl-xl-4">
                        <aside class="sidebar pt-5 pt-lg-0 mt-5 mt-lg-0">
                            <!-- Widget others news -->
                            <div class="widget widget-latest-post">
                                <h4 class="widget-title">Otras Noticias</h4>
                                @if (count($latestsPosts) > 0)
                                    @foreach ($latestsPosts as $latestPost)
                                        <div class="media">
                                            <a class="pull-left" href="{{ route('news.single', $latestPost->id) }}">
                                                <img class="media-object" src="{{ $latestPost->gallery->image }}" alt="Image">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <a href="{{ route('news.single', $latestPost->id) }}">{{ $latestPost->title }}</a>
                                                </h4>
                                                <p>{!! limitHtml($post->description, 15, '...') !!}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="widget-latest-post-wrap">
                                        <div class="widget-latest-post-item">
                                            <h5>No hay noticias publicadas</h5>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <!-- End Latest Posts -->

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection