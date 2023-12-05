<?php
  if(isset($_POST['tambah'])){
    include_once 'koneksi.php';

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $input = mysqli_query($koneksi, "insert into mahasiswa values
    ('$nim','$nama','$gender','$alamat')");
    if($input){
      echo "<h3>Data Berhasil di Tambahkan</h3>";
      echo "<a href = 'tambah.php>Kembali</a>";
    }
    else{
      echo "<h3>Data Gagal di Tambahkan</h3>";
      echo "<a href = 'tambah.php>Kembali</a>";
    }
  } else {
    echo "<script>window.location.back() 'index.php'</script>";
  }
?>