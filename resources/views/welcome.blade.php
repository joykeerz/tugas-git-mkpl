<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran Garuk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <style>
        body{
    background:#eee;
        }
        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto;
        }
        .social-link {
            width: 30px;
            height: 30px;
            border: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            border-radius: 50%;
            transition: all 0.3s;
            font-size: 0.9rem;
        }
        header {
        position: relative;
        background-color: black;
        height: 75vh;
        min-height: 25rem;
        width: 100%;
        overflow: hidden;
        }
        header video {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: 0;
        -ms-transform: translateX(-50%) translateY(-50%);
        -moz-transform: translateX(-50%) translateY(-50%);
        -webkit-transform: translateX(-50%) translateY(-50%);
        transform: translateX(-50%) translateY(-50%);
        }
        header .container {
        position: relative;
        z-index: 2;
        }
        header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.5;
        z-index: 1;
        }
        @media (pointer: coarse) and (hover: none) {
            header {
                background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
            }
            header video {
                display: none;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Restoran Garuk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
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
                <a class="nav-link" href="/minumanHangat">Minuman hangat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Makanan penutup</a>
            </li>
          </ul>
        </div>
    </nav>
    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
          <source src="https://cdn.videvo.net/videvo_files/video/free/2017-02/small_watermarked/Running_Sushi__3625_preview.webm" type="video/mp4">
        </video>
        <div class="container h-100">
          <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-white">
              <h1 class="display-3">Selamat Datang Di Restoran Garuk</h1>
              <p class="lead mb-0">Aplikasi Manajemen Stok Restoran</p>
            </div>
          </div>
        </div>
    </header>

    <section class="my-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                  <img class="card-img-top" src="holder.js/100px180/" alt="">
                  <div class="card-body text-center">
                    <h4 class="card-title">Tentang Web Ini</h4>
                    <p>
                        Kami menyediakan produk aplikasi manajemen stok berbasis web<br/>
                        yang bisa berguna untuk kebutuhan manajemen stok restoran anda<br/>
                        website ini berlisensi gratis, sehingga anda bisa menggunakannya sebebas mungkin
                    </p>
                  </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <div class="container py-5">
        <div class="row mb-4">
          <div class="col-lg-5">
            <h2 class="display-4 font-weight-light">Our team</h2>
            <p class="font-italic text-muted">Berikut Adalah Collabolator Github Kami</p>
          </div>
        </div>

        <div class="row text-center">
          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Joy</h5><span class="small text-uppercase text-muted">Collaborator</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Dzikirullah</h5><span class="small text-uppercase text-muted">Collaborator</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Sakti</h5><span class="small text-uppercase text-muted">Collaborator</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Haikal</h5><span class="small text-uppercase text-muted">Collaborator</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Fadli</h5><span class="small text-uppercase text-muted">Collaborator</span>

            </div>
          </div>
          <!-- End-->

          <!-- Team item-->
          <div class="col-xl-3 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">Aldiza</h5><span class="small text-uppercase text-muted">Collaborator</span>

            </div>
          </div>
          <!-- End-->

        </div>
      </div>
</body>
</html>
