<!doctype html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>My Portofolio</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="tes.css" rel="stylesheet">
    </head>
  <body>

  <!-- navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  
    <a href="#home" class="navbar-brand page-scroll">Aan Abdul Rohman</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav navbar-right">
    <li><a href="#about" class="page-scroll">About</a></li>
    <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
    <li><a href="#contact" class="page-scroll">Contact</a></li>
  </ul>
</div>
  </div>
</nav>
  <!-- akhir navbar -->

<!--jumbotron-->
    <div class="jumbotron text-center">
      <img src="img/aan.jpg" >
      <h1>Aan Abdul Rohman</h1>
      <p>Enterpreuner | Junior Web Devloper | Security System</p>
    </div>
    <!--akhir jumbotron-->

    <!--about-->
<section class="about" id="about">
  <div class="container">
    <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center">About</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <p class="pKiri">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="col-sm-5 col-sm-offset-1">
          <p class="pKanan">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</section>
    <!--akhirabout-->


    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Portfolio</h2>
            <hr>
          </div>
        </div>

          <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
            <img src="img/1.jpg" width="300">
          </a>
          </div>

          <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
            <img src="img/2.jpg" width="180px" height="">
          </a>
          </div>

          <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
            <img src="img/4.jpg" width="230px" height="">
          </a>
          </div>

          <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
            <img src="img/5.jpg" width="230px" height="">
          </a>
          </div>

          <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
            <img src="img/6.jpg" width="300px" height="">
          </a>
          </div>

          <div class="row">
          <div class="col-sm-4">
            <a href="" class="thumbnail">
            <img src="img/7.jpg" width="230px" height="">
            <p></p>
          </a>
          </div>


        </div>
      </div>
    </section>


    <section class="contact" id="contact">
      <div class="container">
        <div class="row col-lg-offset-1 text-center">
          <div class="col-sm-12 text-center">
            <h2>Kontak</h2>
            <hr>
          </div>
        </div>
        <div class="row col-lg-offset-1 ">
          <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
  <div class="card-body">
    <h2 class="card-title">Kontak Saya</h2>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
    </div>
    <div class="row">
          <div class="col-lg-12 text-center">
      <ul class="list-group">
  <li class="list-group-item"><h1>Lokasi</h1></li>
  <li class="list-group-item">Kantor</li>
  <li class="list-group-item">Jl. Bintara Raya, No 11 (Samping furniture new moon)</li>
  <li class="list-group-item">Bekasi, Indonesia</li>
      </ul>
      </div>
          </div>
</div>
     <div class="row">
        <div class="col-lg-6">
          <form>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control" placeholder="masukan nama">
              </div>

              <div class="form-group">
                <label for="nama">Email</label>
                <input type="email" id="Email" class="form-control" placeholder="masukan email">
              </div>

              <div class="form-group">
                <label for="nama">No Telepon</label>
                <input type="tel" id="telepon" class="form-control" placeholder="masukan no telepon">
              </div>
              <select class="form-control">
                <option>Pilih Kategori</option>
                <option>CCTV</option>
                <option>Alarm</option>
                <option>GPS</option>
              </select>
              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" rows="10" placeholder="masukan pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim Pesan</button>
          </form>
        </div>
      </div>
    </section>


    <footer>
      <div class="container text-center">
      <div class="row">
        <div>
          <div class="col-sm-12">
            <p>&copy; copyright 2019 | built by. <a href="http//instagram.com/aanabdulrohman">Aan abdul rohman </a><i class="glyphicon glyphicon-heart"></i></p>
          </div>
        </div>
        <div class="col-sm-12">
          <a href="http:instagram.com/aandkomputer" class="btn btn-primary">Follow my instagram</a>
        </div>
      </div>
    </div>
    </footer>
    
    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    
    <script src="bootstrap/js/jquery.easing.1.3.js"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <script src="bootstrap/js/script.js"></script> 
  </body>
</html>