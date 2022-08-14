@extends('layouts.admin')

@section('title')
Ubah Gallery
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Agenda {{ $item->title }}</h1>
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
      <form action="{{ route('agenda.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="agenda_years_id">Penanggalan Agenda Kerja</label>
        <select name="agenda_years_id" required class="form-control">
          <option value="{{ $item->agenda_years_id }}">Ubah penanggalan</option>
          @foreach ($agenda_years as $agenda_year)
          <option value="{{ $agenda_year->id }}">
            {{ \Carbon\Carbon::parse($agenda_year->date)->isoFormat('dddd, D MMMM Y') }}
          </option>
          @endforeach
        </select>
        <div class="form-group">
          <label for="title">Judul</label>
          <input type="text" class="form-control" name="title" placeholder="Judul Artikel" value="{{ $item->title }}">
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" id="inputGroupFile03"
              aria-describedby="inputGroupFileAddon03">
            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection