@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="container mt-3">
          <h3 class="text-primary text-uppercase">Artikel Terbaru</h3>
        </div>
        <hr class="divider">
        <div class="card-article">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-lg-3 mr-3">
                <img
                  src="https://images.unsplash.com/photo-1530878902700-5ad4f9e4c318?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1034&q=80"
                  alt="" class="rounded" style="width: 250px;">
              </div>
              <div class="col">
                <h5 class="text-dark card-title mt-3">
                  Card title
                </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero delectus ullam voluptatibus. Ipsum
                  molestias nihil nemo illum explicabo, molestiae doloribus tempore cum nulla adipisci consequuntur,
                  vitae
                  ipsa, quibusdam in eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero delectus ullam
                  voluptatibus. Ipsum
                  molestias nihil nemo illum explicabo, molestiae doloribus tempore cum nulla adipisci </p> {{-- panjang
                409 huruf --}}

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection