<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Ujian</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: #3498db">


        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">CRUD</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/Home')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/mahasiswa')}}" tabindex="-1" aria-disabled="true">Data Ujian</a>
            </li>
        </ul>

    </form>
</div>
</div>

</nav>
<body>


    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
             <h1>DATA UJIAN</h1>
         </div>
         <div class="card-body">
            <a href="/ujian/tambah" class="btn btn-primary">Input Ujian Baru</a>
            <br/>
            <br/>
            <table class="table table-bordered table-hover table-striped"style="background-color:#95a5a6">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Mata Kuliah</th>
                        <th>Dosen</th>
                        <th>Jumlah Soal</th>
                        <th>Keterangan</th>
                        <th>Created At</th>
                        <th>Updated At</th>

                        <th>OPSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ujian as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->nama_mk }}</td>
                        <td>{{ $p->dosen }}</td>
                        <td>{{ $p->jumlah_soal }}</td>
                        <td>{{ $p->keterangan }}</td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                        <td>
                            <a href="/ujian/edit/ {{ $p->id }}" class="btn btn-primary ">Edit Data</a>
                            <a href="/ujian/hapus/{{ $p->id }}" class="btn btn-warning ">Hapus </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>