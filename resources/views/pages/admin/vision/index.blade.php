@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Visi dan Misi</h1>
    @if ($items->isEmpty())
    <a href="{{ route('vision.create') }}" class="btn btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white"></i> Tambah Visi dan Misi
    </a>
    @endif
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="card shadow">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Visi</th>
                  <th scope="col">Misi</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @forelse ($items as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{!! substr($item->vision, 0, 300) !!}</td>
                  <td>{!! substr($item->mission, 0, 300) !!}</td>
                  <td>
                    <a href="{{ route('vision.edit', $item->id) }}" class="btn btn-info">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('vision.destroy', $item->id) }}" class="d-inline" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="7" class="text-center">
                    Data kosong
                  </td>
                </tr>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection