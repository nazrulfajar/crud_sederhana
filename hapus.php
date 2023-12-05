<?php
  $nim = $_GET["nim"];
    include "koneksi.php";
    mysqli_query($koneksi, "DELETE FROM mahasiswa where nim =$nim");

    return mysqli_affected_rows($koneksi);
    header("location:index.php");
?>