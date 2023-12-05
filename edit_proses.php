<?php
  if(isset($_POST['edit'])){
    include 'koneksi.php';

    $pnim = $_POST['pnim'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $input = mysqli_query($koneksi, "UPDATE mahasiswa set nim = '$nim', nama ='$nama',gender = '$gender',alamat = '$alamat' where nim=$pnim");
    if($input){
    //redirect ke halaman index.php 
      header("location:index.php");
    }
    else{
      echo "<h3>Data Gagal di edit</h3>";
    }
  } else {
    echo "<script>window.location.back() 'index.php'</script>";
  }
?>