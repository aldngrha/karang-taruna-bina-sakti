@extends('layouts.app')

@section('content')
<!-- Header -->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100"
          src="https://images.unsplash.com/photo-1497601089782-06319e8be3a0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
          alt="First slide" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100"
          src="https://images.unsplash.com/photo-1508325739122-c57a76313bf4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
          alt="Second slide" />
      </div>
      <div class="carousel-item">
        <img class="d-block w-100"
          src="https://images.unsplash.com/photo-1505552411588-51fce16351ac?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
          alt="Third slide" />
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top"
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="single-post.html" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top"
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="single-post.html" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top"
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="single-post.html" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top"
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="single-post.html" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top"
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="single-post.html" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-3">
          <div class="card">
            <img class="card-img-top"
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make
                up the bulk of the card's content.
              </p>
              <a href="single-post.html" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-gallery">
    <div class="container">
      <h2 class="text-center">Galeri Foto</h2>
      <div class="owl-carousel owl-theme">
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
        <div class="card">
          <a href="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
            class="fancybox" data-fancybox="gallery1">
            <img
              src="https://images.unsplash.com/photo-1570780728980-63f5a30a1393?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1032&q=80"
              class="card-img-top" alt="..." />
          </a>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection