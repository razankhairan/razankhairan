<?php
include 'koneksi.php';
$id = $_POST['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('Teknik Komputer','Teknik Elektro','Manajemen Informatika');
function active_radio_button($value, $input){
$result = $value == $input ? 'checked':'';
return $result;
}
 ?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>Tambah Mahasiswa</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  </head>
  <body style="background : #95F9E3">
    <form  action="insert.php" method="post">
      <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'];?>">
      <table border="1" class="table table-striped table-hover" style=" border-style: solid red; background-color : #69EBD0">
        <tr>
          <td>NIM</td>
          <td><input type="text"  name="nim"></td>
        </tr>
        <tr>
          <td>NAMA</td>
          <td><input type="text"  name="nama"></td>
        </tr>
        <td>ID</td>
        <td><input type="text"  name="id"></td>
      </tr>
        <tr>
          <td>JENIS KELAMIN</td>
          <td>
          <input type="radio" name="jenis_kelamin" value="L">Laki Laki
          <input type="radio" name="jenis_kelamin" value="P">Perempuan
        </td>
        </tr>
        <tr>
          <td>JURUSAN</td>
          <td>
          <select name="jurusan">
            <?php
              foreach ($jurusan as $j) {
                echo "<option value='$j' ";
                echo ">$j</option>";
              }
             ?>
          </select>
        </td>
        <tr>
          <tr>
            <td>ALAMAT</td>
            <td><input  type="text" name="alamat"></td>
          </tr>
          <tr>
            <td colspan="2">
              <button name="action" type="submit">SIMPAN PERUBAHAN</button>
              <a href="index.php">Kembali</a>
            </td>
          </tr>
      </table>
    </form>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</html>
