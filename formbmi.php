<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Form BMI</title>
  </head>
  <body>
    <div class="cotainer mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="hasilbmi.php" method="GET">
                            <h3 class="text-center">Form Isian Indeks Masa Tubuh (BMI)</h3>
                            
                            <div class="col-md-6 mb-auto">
                                <label for="" class="form-label">Nama</label><br>
                                <input type="text" name="nama">                                     
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Berat Badan</label><br>
                                <input type="text" name="bb" id="">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Tinggi Badan</label><br>
                                <input type="text" name="tb" id="">
                            </div>
                            <div class="col-md-4 mt-3">
                                <label for="">Umur</label><br>
                                <input type="text" name="umur" id="">
                            </div>
                            <div class="grup mt-3 ml-3">
                                <label for="">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="laki-laki" value="laki-laki" checked>
                                <label class="form-check-label" for="Laki-Laki">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" id="perempuan" value="perempuan">
                                <label class="form-check-label" for="perempuan">Perempuan</label>
                            </div>
                            </div>
                            <button class="btn btn-primary mt-3" type="submit" value="simpan" name="proses">submit</button>
                            
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>