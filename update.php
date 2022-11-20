<?php
include 'functions.php';

  $id = $_POST['id'];
  $nama   = $_POST['nama'];
  $pesanan   = $_POST['pesanan'];
  $menu   = $_POST['menu'];
  $jumlah   = $_POST['jumlah'];
  $alamat   = $_POST['alamat'];
  $email   = $_POST['email'];
  $no_wa   = $_POST['no_wa'];
  $foto = $_FILES['foto']['name'];

  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg');  
    $x = explode('.', $foto); 
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$foto; 
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                      
                   $query  = "UPDATE pemesanan SET nama = '$nama', pesanan = '$pesanan', menu = '$menu', jumlah = '$jumlah', alamat = '$alamat', email = '$email ', no_wa = '$no_wa', foto = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='read.php';</script>";
                    }
              } else {     
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='create.php';</script>";
              }
    } else {
      $query  = "UPDATE pemesanan SET nama = '$nama', pesanan = '$pesanan', jumlah = '$jumlah', alamat = '$alamat', email = '$email ', no_wa = '$no_wa'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
      } else {
          echo "<script>alert('Data berhasil diubah.');window.location='read.php';</script>";
      }
    }
