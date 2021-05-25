<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleInput.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
<title>Input Data Pegawai</title>
</head>
<body>

    <div class="container">
        <h2 style="text-align: center;">Tambah Data Pegawai</h2>
        <a href="index.php" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
        <div class="shadow-lg p-3 mb-5 bg-body rounded">
            <form action="user_act.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama : </label>
                    <input autocomplete="OFF" type="text" class="form-control" placeholder="Masukan Nama" name="nama" required="required">
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak : </label>
                    <input autocomplete="OFF" type="text" minlenght="11" maxlength="13" class="form-control" placeholder="Masukan Kontak" name="kontak" required="required">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat : </label>
                    <textarea autocomplete="OFF" class="form-control" name="alamat" required="required"></textarea>
                </div>
                <div class="form-group">
                    <label for="foto">Foto : </label>
                    <input type="file" name="foto" required="required">
                    <p style="color:red">Ekstensi yang di perbolehkan .png | .jpg | .jpeg | .gif</p>
                </div>
                <input type="submit" name="" value="Simpan" class="btn btn-primary">
            </form>
        </div>
    </div>    
    
</body>
</html>