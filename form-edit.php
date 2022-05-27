<?php
include 'koneksi.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($koneksi, "SELECT * from mahasiswa where id_mhs='$id'");
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('Teknik Komputer','Teknik Elektro','Manajemen Informatika');
function active_radio_button($value,$input){
$result = $value==$input?'checked':'';
return $result;
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital Talent</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  </head>
  <body style="background : #95F9E3">
    <form  action="edit.php" method="post">
      <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'];?>">
      <table border="1" class="table table-striped table-hover" style=" border-style: solid red; background-color : #69EBD0">
        <tr>
          <td>NIM</td>
          <td><input type="text" value="<?php echo $row['nim'];?>" name="nim"></td>
        </tr>
        <tr>
          <td>NAMA</td>
          <td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td>
        </tr>
        <tr>
          <td>JENIS KELAMIN</td>
          <td>
          <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki Laki
          <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
        </td>
        </tr>
        <tr>
          <td>JURUSAN <?php echo $row['jurusan'];?></td>
          <td>
          <select name="jurusan">
            <?php
              foreach ($jurusan as $j) {
                echo "<option value='$j' ";
                echo $row['jurusan']==$j?'selected="selected"': '';
                echo ">$j</option>";
              }
             ?>
          </select>
        </td>
        <tr>
          <tr>
            <td>ALAMAT</td>
            <td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td>
          </tr>
          <tr>
            <td colspan="2"><button type="submit" value="simpan" button-primary>SIMPAN PERUBAHAN</button>
              <a href="index.php" button type="submit" value="simpan" button-primary >Kembali</a>
            </td>
          </tr>
      </table>
    </form>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</html>
