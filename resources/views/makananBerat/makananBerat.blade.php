<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garuk Resto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Restoran Garuk |</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Takjil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Makanan berat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Makanan ringan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Minuman dingin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Minuman hangat</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Makanan penutup</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
<div class="row">
    <table class="table">
        <thead>
         <tr>
             <th scope="col">No.</th>
             <th scope="col">Nama makanan</th>
            <th scope="col">Harga makanan</th>
            <th scope="col">Jumlah makanan</th>
            <th scope="col">Ubah</th>
            <th scope="col">Hapus</th>
        </tr>
        </thead>
  <tbody>
    @foreach ($data as $data)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama_makanan}}</td>
        <td>{{$data->harga_makanan}}</td>
        <td class="row">

                              <form action="/maber/kurang/{{$data->id}}" method="post">
                                @csrf
                                <button>-</button>&nbsp;&nbsp;
                              </form>

                              {{$data->jumlah_makanan}}

                              <form action="/maber/tambah/{{$data->id}}" method="post">
                                @csrf
                                &nbsp;&nbsp;<button>+</button>
                              </form>

                            </td>

        <td><a class="btn btn-info" href="/maber/ubah/{{$data->id}}">ubah</a></td>
        <td><a onClick="return confirm('Beneran mau diapus?')" class="btn btn-danger" href="/maber/buang/{{$data->id}}">hapus</a></td>
        
        
    </tr>@endforeach
  </tbody>
</table>

</div>
<div class="row">
<form action="/maber/input" method="POST">
@csrf
  <div class="form-group">
    <label>Nama makanan</label>
    <input name="namaMakanan" type="text" class="form-control">
  </div>
  
  <div class="form-group">
    <label>Harga makanan</label>
    <input name="hargaMakanan" type="text" class="form-control" >
  </div>

  <div class="form-group">
    <label>Jumlah makanan</label>
    <input name="jumlahMakanan" type="text" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

</body>
</html>