@extends('layouts.admin')

@section('title')
Ubah Gallery
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Ubah Program Kerja</h1>
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
      <form action="{{ route('program.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <label for="program_years_id">Penanggalan Program Kerja</label>
        <select name="program_years_id" required class="form-control">
          <option value="{{ $item->program_years_id }}">Ubah penanggalan</option>
          @foreach ($program_years as $program_year)
          <option value="{{ $program_year->id }}">
            {{ \Carbon\Carbon::parse($program_year->date)->isoFormat('dddd, D MMMM Y') }}
          </option>
          @endforeach
        </select>
        <div class="form-group">
          <label for="program">Program Kerja</label>
          <textarea name="program" class="ckeditor form-control" rows="10">{{ $item->program }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

@endsection