@extends('layouts.admin')

@section('title')
Ubah Gallery
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Visi dan Misi</h1>
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
      <form action="{{ route('vision.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="vision">Visi</label>
          <textarea name="vision" class="ckeditor form-control" rows="10">{{ $item->vision }}</textarea>
        </div>
        <div class="form-group">
          <label for="mission">Misi</label>
          <textarea name="mission" class="ckeditorr form-control" rows="10">{{ $item->mission }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection