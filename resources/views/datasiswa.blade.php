@extends('layout.admin')
@push('css')

@endpush
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Mahasiswa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Mahasiswa</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container">
    <a href="/tambahsiswa" class="btn btn-primary">Tambah</a>
  
    <div class="row g-3 align-items-center mt-2">
      <div class="col-auto">
        <form action="/murid" method="GET">
        <input type="search" id="inputPassword6" placeholder="search" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
  
      <div class="col-auto">
        <a href="/exportpdf" class="btn btn-primary">Export PDF</a>
      </div>
      
    </div>
    </div>
    <div class="row">
      @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{$message}}
          </div>
      @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Prodi</th>
                <th scope="col">Kelas</th>
                <th scope="col">Semester</th>
                <th scope="col">Angkatan</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                 $no = 1; 
              @endphp
                @foreach ($data as $index => $row)
                <tr>
                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->jeniskelamin }}</td>
                    <td>{{ $row->prodi}}</td>
                    <td>{{ $row->kelas}}</td>
                    <td>{{ $row->semester }}</td>
                    <td>{{ $row->angkatan }}</td>
                    <td>0{{ $row->telepon }}</td>
                    <td>
                        <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                        <a href="/delete/{{ $row->id}}"class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach                  
            </tbody>
          </table>
          {{ $data->links()}}
    </div>
  </div>
</div>


</div>


@endsection