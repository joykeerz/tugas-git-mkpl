<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <title>Restoran Garuk</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Restoran Garuk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Takjil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Makanan berat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Makanan rigan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Minuman dingin</a>
              </li>
              <li class="nav-item active">
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
      <div class="row">
          <h1> </h1>
      </div>
      <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Minuman Hangat</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($minumanHangat as $MH)
                        <tr>
                            <td>{{$MH->id}}</td>
                            <td>{{$MH->nama_minuman}}</td>
                            <td>{{$MH->harga_minuman}}</td>
                            <td>
                                <div class="row">
                                    <form action="minumanHangat/tambah/{{$MH->id}}" method="POST">
                                        @csrf
                                        <button class="btn btn-info">+</button>&nbsp;
                                    </form>
                                    {{$MH->jumlah_minuman}}&nbsp;
                                    <form action="minumanHangat/kurang/{{$MH->id}}" method="POST">
                                        @csrf
                                        <button class="btn btn-info">-</button>
                                    </form>
                                </div>
                            </td>
                            <td><a href ="/minumanHangat/edit/{{$MH->id}}" type="button" class="btn btn-info">Ubah</a></td>
                            <td><a href ="/minumanHangat/delete/{{$MH->id}}" type="button" class="btn btn-danger">Hapus</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <form action="/minumanHangat/tambah" method="POST">
                @csrf
                <div class="col">
                    <div class="form-group">
                        <label >Nama Minuman Hangat</label>
                        <input name="namaMinumanHangat"type="text" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label >Harga</label>
                        <input name="hargaMinumanHangat"type="text" class="form-control" >
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label >Jumlah</label>
                        <input name="jumlahMinumanHangat"type="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
</body>
</html>
