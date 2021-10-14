<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <header>
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="getbootstrap.html">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>   
          </nav>
        </header>
        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold">Selamat Datang</h1>
              <p class="col-md-8 fs-4">

              <form method="post" action="tampil2.php">
                <label>Masukkan Nama</label><br/>
                <input type="text" name="nama"><br/>

                <label>Masukkan jenis kelamin</label><br/>
                <input type="text" name="jenis"><br/>  

                <label>Masukkan Agama</label><br/>
                <input type="text" name="agama"><br/>

                <label>Masukkan Alamat</label><br/>
                <input type="text" name="Alamat"><br/> 
                
                <label>Masukkan Tempat Lahir</label><br/>
                <input type="text" name="TL"><br/> 

                <label>Masukkan Tanggal Lahir</label><br/>
                <input type="text" name="tanggal"><br/>  

                <label>Masukkan Hobi</label><br/>
                <input type="text" name="hobi"><br/> 

                <label>Masukkan Cita-cita</label><br/>
                <input type="text" name="cita"><br/> 

                <label>Masukkan Usia</label><br/>
                <input type="text" name="usia"><br/> 

                <label>Masukkan asal Sekolah</label><br/>
                <input type="text" name="sekolah"><br/> 

                <input type="submit" value="oke">
                </form>
    </p>
            </div>
            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021
              </footer>
          </div>

          
        
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>