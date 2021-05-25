<?php 
    $folder = "gambar/";
    $filename =$_GET['file'];
    $file_extension = strtolower(substr(strrchr($filename,"."),1));

    if (!file_exists($folder.$_GET['file'])) {
        echo "<h1>Access Forbidden !</h1> 
              <p> File Sudah Tidak Ada</p>";
    exit;
    }
    elseif ($file_extension=='php') {
        echo "<h1> Acces Forbidden ! </h1> 
              <p> Maaf, File yang Anda Download sudah tidak tersedia atau filenya (direktorinya) telah di proteksi. <br/>.</p>";
    exit;
    }

    else {
        header("Content-Disposition: attachment; filename=".basename($filename));
        header("Content-Type: application/octet-stream;");
        readfile("gambar/".$filename);
    }
?>