<?php
    include 'config.php';

    // $npk = $_POST['npk'];
    $guru = $_POST['guru'];
    $mapel = $_POST['mapel'];
    $kelas = $_POST['kelas'];

    $rand = rand();
    $ekstensi = array('png','jpg','jpeg','gif');
    $filename = $_FILES['buku']['name'];
    $ukuran = $_FILES['buku']['size'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$ekstensi) ) {
            header("location:ShowGuru.php?alert=gagal_ekstensi");
        }else{
            if($ukuran < 1044070){
                $xx = $rand.'_'.$filename;
                move_uploaded_file($_FILES['buku']['tmp_name'],'gambar/'.$rand.'_'.$filename);
                mysqli_query($conn, "INSERT INTO guru VALUES(NULL,'$guru','$mapel','$kelas','$xx')");
                header("location:ShowGuru.php?alert=berhasil");
            }else{
                 header("location:ShowGuru.php?alert=gagal_ukuran");
            }
}
?>