<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Tabel Guru</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initialscale=1">
<link rel="stylesheet" href="style.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Data Data Guru</h2><br>
            <?php
            if(isset($_GET['alert'])){
            if($_GET['alert']=='gagal_ekstensi'){
            ?>
            <div class="alert alert-warning alertdismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h4><i class="icon fa fa-warning"></i>Peringatan !</h4>
            Ekstensi Tidak Diperbolehkan
    </div>
            <?php
            }elseif($_GET['alert']=="gagal_ukuran"){
            ?>
        <div class="alert alert-warning alertdismissible">
        <h4><i class="icon fa fa-check"></i>Peringatan !</h4>
        Ukuran File terlalu Besar
    </div>
        <?php
        }elseif($_GET['alert']=="berhasil"){
        ?>
        <div class="alert alert-success alertdismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <h4><i class="icon fa fa-check"></i>Success</h4>
            Berhasil Disimpan
        </div>
        <?php
        }
        }
        ?> <br>
        <a type="button" class="btn btn-info" href="guru_input.php"><i class="fas fa-plus"></i> Tambah Data</a>
        <a href="index.php" class="btn btn-warning text-white"><i class="fas fa-book"></i> Data Pegawai</a>
        <br><br>
        <!-- search -->
        <div class="input-group">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control"/>
                <label class="form-label" for="form1">Cari</label>
            </div>
            <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="text-center">
            <table class="table table-bordered" id="table">
                <tr>
                    <th width="20%">Nama Guru</th>
                    <th width="20%">Mapel</th>
                    <th width="20%">Kelas</th>
                    <th width="20%">Buku</th>
                    <th width="20%">Aksi</th>
                </tr>
                    <?php
                    $data = mysqli_query($conn,"select * from guru");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                <tbody id="myTable">
                    <tr>
                        <td><?php echo $d['nama_guru']; ?></td>
                        <td><?php echo $d['mapel']; ?></td>
                        <td><?php echo $d['kelas']; ?></td>
                        <td><img src="gambar/<?=
                        $d['buku'] ?>" width="35" height="40"></td>
                        <td><?= "<a href=\"download.php?file=$d[buku]\">Download File </a>" ?></td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
        $("#form1").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            })
        })
    })
    </script>
</body>
</html>