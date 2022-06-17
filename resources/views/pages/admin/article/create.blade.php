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
      <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" placeholder="Judul Artikel" value="{{ old('title') }}">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile03"
              aria-describedby="inputGroupFileAddon03">
            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
          </div>
        </div>
        <div class="form-group">
          <label for="post">Penulis</label>
          <textarea name="post" class="ckeditor form-control" rows="10">{{ old("post") }}</textarea>
        </div>
        <div class="form-group">
          <label for="written">Penulis</label>
          <input type="text" class="form-control" name="written" placeholder="Judul Artikel"
            value="{{ old('written') }}">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection