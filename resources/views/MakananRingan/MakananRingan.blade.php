<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RestoranGaruk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Restoran Garuk</a>
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
  </div>
</nav>


<div class="container">
    <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Minuman</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
         <tbody>
            @foreach ( $MakananRingan as $MakananRingan)
            <tr>
                <td>{{$MakananRingan->id}}</td>
                <td>{{$MakananRingan->nama_makanan}}</td>
                <td>{{$MakananRingan->harga_makanan}}</td>
                <td>{{$MakananRingan->jumlah_makanan}}</td>
                <td><a class="btn btn-info" href="/MakananRingan/edit/{{$MakananRingan->id}}">ubah</a></td>
                <td><a class="btn btn-danger" href="/MakananRingan/hapus/{{$MakananRingan->id}}">hapus</a></td>

            </tr>
            @endforeach
         </tbody>
</table>
 </div>

    <div class="row">
        <form action="/MakananRingan/tambah" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Makanan</label>
            <input name="namaMakananRingan" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Harga</label>
            <input name="hargaMakananRingan" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label>Jumlah</label>
            <input name="jumlahMakananRingan" type="text" class="form-control">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>




</body>
</html>