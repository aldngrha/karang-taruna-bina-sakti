@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Tahun Program Kerja</h1>
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
          <label for="program-year">Tahun Program Kerja</label>
          <input name="program-year" class="form-control" rows="10">{{ old("program_year") }}</input>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
      </form>
    </div>
  </div>
  <!-- /.container-fluid -->

</div>
@endsection