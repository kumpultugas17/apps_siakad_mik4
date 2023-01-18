<?php
if (isset($_POST['simpan'])) {
   require_once '../../config.php';
   $kode_jurusan = $_POST['kode_jurusan'];
   $nama_jurusan = $_POST['nama_jurusan'];
   $status = $_POST['status'];

   $sql = $conn->query("INSERT INTO jurusan (kode_jurusan, nama_jurusan, status) VALUES ('$kode_jurusan', '$nama_jurusan', '$status')");

   if ($sql) {
      header('location:jurusan.php');
   } else {
      echo 'Gagal Input!';
   }
}