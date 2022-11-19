<?php
include 'connect.php';

    $nama = $_POST['nama'];
    $menu = $_POST['menus_type'];
    $menu_name = $_POST['menus_name'];
    $foto = $_FILES['bukti']['name'];

    if($foto != '') {
        $ekstensi_diperbolehkan = array('png','jpg'); 
        $x = explode('.', $foto); 
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['bukti']['tmp_name'];   
        $angka_acak     = rand(1,999);
        $nama_gambar_baru = $angka_acak.'-'.$foto;
              if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                      move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); 
                        $query1 = "INSERT INTO menus (menus_type, menus_name) VALUES ('$menu', '$menu_name')";
                        $result1 = mysqli_query($koneksi, $query1);
                        $last_id = mysqli_insert_id($koneksi);
                        $query2 = "INSERT INTO orders (nama, id_menus, waktu, stat, bukti) VALUES ('$nama', $last_id, now(), 'belum', '$nama_gambar_baru')";
                        $result2 = mysqli_query($koneksi, $query2);
                        if(!$result1 && !$result2){
                            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                                    " - ".mysqli_error($koneksi));
                        } else {
                            echo "<script>alert('Data berhasil ditambah.');window.location='index.html';</script>";
                        }
      
                  } else {     
                      echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='index_order.php';</script>";
                  }
      } else {
          $query1 = "INSERT INTO menus (menus_type, menus_name) VALUES ('$menu', '$menu_name')";
          $last_id = mysqli_insert_id($koneksi);
          $query2 = "INSERT INTO orders (nama, id_menus, waktu, 'stat', bukti) VALUES ('$nama', '$last_id', now(), 'belum', null)";
          $result1 = mysqli_query($koneksi, $query1);
          $result2 = mysqli_query($koneksi, $query2);
          if(!$result1 && !$result2){
              die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
              " - ".mysqli_error($koneksi));
          } else {
              echo "<script>alert('Data berhasil ditambah.');window.location='read.php';</script>";
          }
      }
      ?>
