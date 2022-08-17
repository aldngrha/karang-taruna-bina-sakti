@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Program Kerja</h1>
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
      <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="date">Penanggalan Program Kerja</label>
          <input type="date" class="form-control" name="date" value="{{ old('date') }}">
        </div>
        <div class="form-group">
          <label for="program_years_id">Tahun Program Kerja</label>
          <select name="program_years_id" required class="form-control">
            <option value="">Pilih Tahun Program Kerja</option>
            @foreach ($program_years as $program_year)
            <option value="{{ $program_year->id }}">
              {{ $program_year->year }}
            </option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="program">Program Kerja</label>
          <textarea name="program" class="ckeditor form-control" rows="10">{{ old("porgam") }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection