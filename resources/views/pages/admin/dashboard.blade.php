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
        @foreach ($items->slice(0,5) as $item)
        <div class="card-article">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col-lg-3 mr-3">
                <img src="{{ Storage::url($item->image) }}" alt="" class="rounded" style="width: 250px;">
              </div>
              <div class="col">
                <h5 class="text-dark card-title mt-3">
                  {{ $item->title }}
                </h5>
                <p>{!! substr($item->post, 0, 370) !!} </p>

              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </div>
</div>
@endsection