@extends('layouts.app')

@section('content')
<!-- Header -->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach ($sliders as $slider)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $slider['id'] }}" class="active"></li>
      @endforeach
    </ol>
    <div class="carousel-inner" style="height: 600px">
      @foreach ($sliders as $photo)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img class="d-block w-100" src="{{ Storage::url($photo->image) }}" />
      </div>
      @endforeach
    </div>
    <a class=" carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!-- Article -->

<main>
  <section class="section-article">
    <div class="container">
      <h2 class="text-center p-3">Artikel Karang Taruna</h2>
      <div class="section-article-card row">
        @foreach ($articles as $article)
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card"">
            <img class=" card-img-top" src="{{ Storage::url($article->image) }}" alt="Card image cap"
            style="height: 250px" />
          <div class="card-body">
            <h5 class="card-title">{{ substr($article->title, 0, 26) }}</h5>
            <p class="card-text">
              {!! substr($article->post, 0, 100) !!}
            </p>
            <a href="{{ route('single-post', $article->slug) }}" class="btn btn-primary">Lihat Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
      {{ $articles->links() }}
    </div>
    </div>
  </section>

  <section class="section-gallery">
    <div class="container">
      <h2 class="text-center">Galeri Foto</h2>
      <div class="owl-carousel owl-theme">
        @foreach ($galleries as $gallery)
        <div class="card" style="height: 200px">
          <a href="{{ Storage::url($gallery->image) }}" class="fancybox" data-fancybox="gallery1">
            <img src="{{ Storage::url($gallery->image) }}" class="card-img-top" alt="..." style="height: 200px" />
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>
</main>
@endsection