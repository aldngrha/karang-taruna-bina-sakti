@extends('layouts.single-post')

@section('content')
<main>
  <section class="section-post">
    <div class="container">
      <h3 class="post-title">
        {{ $article->title }}
      </h3>
      <p>
        ditulis oleh <span class="written">{{ $article->written }}</span>, {{ $article->created_at->diffForHumans() }}
      </p>
      <img src="{{ Storage::url($article->image) }}" alt="" style="width: 100%" class="justify-content-center mb-2" />
      <p class="post-article">
        {!! $article->post !!}
      </p>
    </div>
    <div class="more-article">
      <div class="container">
        <h4>Artikel Lainnya</h4>
        <div class="row">
          <div class="col-md-12 col-sm-6 mb-3">
            <div class="owl-carousel owl-theme">
              @foreach ($articles-> as $post)
              <div class="card">
                <img class="card-img-top" src="{{ Storage::url($post->image) }}" alt="Card image cap"
                  style="height: 150px" />
                <div class="card-body">
                  <h5 class="card-title">{{ substr($post->title, 0, 19) }}</h5>
                  <p class="card-text">
                    {!! substr($post->post, 0, 100) !!}
                  </p>
                  <a href="{{ route('single-post', $post->slug) }}" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection