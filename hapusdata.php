<?php
    //koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));

    $nim = $_GET['nim'];
    $hapus = mysqli_query($connection, "delete from mahasiswa where NIM ='$nim'");

    if ($hapus){
        echo "<script> alert ('Data berhasil dihapus')</script>";
        header ("refresh:0;index.php");
    }else {
        echo "<script> alert ('Data tidak berhasil dihapus')</script>";
        header ("refresh:0;index.php");
    }
?>