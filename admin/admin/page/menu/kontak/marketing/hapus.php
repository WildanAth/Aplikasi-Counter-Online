<!--Hapus-->
<?php
include('admin/admin/page/menu/koneksi/koneksi.php');
  $id = $_GET['id'];
  $query = "DELETE FROM tb_market WHERE id_market=$id";
  $data = mysql_query($query);
  if ($query) {
    echo"<script>window.alert('Hapus Berhasil..!')</script>";
    echo"<script>document.location='dasbord.php?page=kontak';</script>"; 
  } else {
    echo"<script>window.alert('Hapus Gagal..!')</script>";
    echo"<script>document.location='dasbord.php?page=kontak';</script>";
  }
?>