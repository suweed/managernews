@push('styles')
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/website/plugins/slick/slick.css')}}">
    <!-- Slider custom CSS -->
    <link href="{{ asset('assets/website/css/components/slider/slider.css') }}" rel="stylesheet">
@endpush
@push('scripts')
    <!-- slick Carousel -->
    <script src="{{ asset('assets/website/plugins/slick/slick.min.js') }}"></script>
    <!-- Slider custom JS -->
    <script src="{{ asset('assets/website/js/components/slider/slider.js') }}"></script>
@endpush

@if (count($latestsPosts) > 0)
    <section class="related-projects section-sm bg-gray">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2>Noticias y Actividades para ti</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="slider-cards">
                    @foreach ($latestsPosts as $latestPost)
                        <div class="card news-cards">
                            <div class="card-img">
                                <img class="card-img-top" src="{{ $latestPost->gallery->image }}" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $latestPost->title }}</h5>
                                <div class="card-text">{!! limitHtml($latestPost->description, 80, '...') !!}</div>
                                <a href="{{ route('news.single', $latestPost->id) }}" class="btn btn-primary">Saber Más</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>
@endif