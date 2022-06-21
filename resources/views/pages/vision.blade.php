@extends('layouts.app')

@section('content')
<main>
  <section class="section-vision">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 mb-4">
          <h3 class="mb-4">Visi dan Misi</h3>
          <h5 class="mb-3">Visi</h5>
          @foreach ($visions as $vision)
          <p class="visi-text">
            {!! $vision->vision !!}
          </p>
          <h5 class="mb-3">Misi</h5>
          <p class="visi-text">
            {!! $vision->mission !!}
          </p>
          @endforeach
        </div>
        <div class="col-md-4 col-sm-6">
          <h3 class="text-center bg-light p-2">Galeri Foto</h3>
          <div class="container">
            <div class="row">
              @foreach ($galleries->slice(0,4) as $gallery)
              <div class="col-lg-6 col-sm-6">
                <div class="card mb-2" style="height: 100px">
                  <a href="{{ Storage::url($gallery->image) }}" class="fancybox" data-fancybox="gallery1">
                    <img src="{{ Storage::url($gallery->image) }}" class="card-img-top res" alt="..."
                      style="height: 100px" />
                  </a>
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