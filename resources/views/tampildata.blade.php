@extends('layout.admin')

@section('content')

<body>
  <h1 class="text-center mb-4">Edit Data Mahasiswa</h1>

  <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                  <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                    <option selected>{{ $data->jeniskelamin}}</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Prodi</label>
                  <input type="text" name="prodi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->prodi}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kelas</label>
                  <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kelas}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Semester</label>
                  <input type="text" name="semester" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->semester}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Angkatan</label>
                  <input type="text" name="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->angkatan}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                  <input type="number" name="telepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->telepon}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  -->
</body>

@endsection