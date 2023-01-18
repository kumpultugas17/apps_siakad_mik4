<!DOCTYPE html>
<html lang="en">

<head>
   <title>Document</title>
</head>

<body>
   <form action="proses_add.php" method="post">
      <input type="text" name="kode_jurusan" placeholder="Masukkan Kode Jurusan">
      <input type="text" name="nama_jurusan" placeholder="Masukkan Nama Jurusan">
      <select name="status">
         <option selected disabled>Pilih Status</option>
         <option value="1">Aktif</option>
         <option value="0">Tidak Aktif</option>
      </select>
      <button type="submit" name="simpan">Simpan</button>
   </form>

   <table border="1" cellpadding="4" cellspacing="0">
      <thead>
         <tr>
            <th>No</th>
            <th>Kode Jurusan</th>
            <th>Nama Jurusan</th>
            <th>Status</th>
            <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         <?php
         require_once '../../config.php';
         $no = 1;
         $query = $conn->query("SELECT * FROM jurusan");
         foreach ($query as $data) :
         ?>
            <tr>
               <td><?= $no++ ?></td>
               <td><?= $data['kode_jurusan']; ?></td>
               <td><?= $data['nama_jurusan']; ?></td>
               <td><?= $data['status']; ?></td>
               <td>
                  <a href="">Edit</a>
                  <a href="">Hapus</a>
               </td>
            </tr>
         <?php
         endforeach
         ?>
      </tbody>
   </table>
</body>

</html>