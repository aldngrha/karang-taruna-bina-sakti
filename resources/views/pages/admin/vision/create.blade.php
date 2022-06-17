@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Slider</h1>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card shadow">
    <div class="card-body">
      <form action="{{ route('vision.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="vision">Visi</label>
          <textarea name="vision" class="ckeditor form-control" rows="10">{{ old("vision") }}</textarea>
        </div>
        <div class="form-group">
          <label for="mission">Misi</label>
          <textarea name="mission" class="ckeditorr form-control" rows="10">{{ old("mission") }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection