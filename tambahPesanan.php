<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Data Pesanan</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pesanan</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPelanggan">ID Pesanan</label>

                        <input type="text" class="form-control mb-3" name="idPelanggan" placeholder="idPelanggan">

                    </div>
                    <div class="form-group">
                        <label for="nmPesanan">Nama Pesanan</label>

                        <input type="text" class="form-control mb-3" name="nmPesanan" placeholder="Nama Pesanan">

                    </div>
                    <div class="form-group">
                        <label for="Jp">Jenis pesanan</label>
                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="Jp" value="Makanan"> Makanan

                        </div>

                        <div class="form-check">

                            <input type="radio" class="form-check-input" name="Jp" value="Minuman"> Minuman

                        </div>
                        <div class="form-group mt-3">
                            <label for="Harga">Harga</label>

                            <textarea class="form-control" name="Harga" id="Harga" cols="5" rows="3"
                                placeholder="Harga"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>