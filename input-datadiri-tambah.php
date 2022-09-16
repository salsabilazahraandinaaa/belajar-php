<h1>tambah data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa:</label>
    <input type="number" name="nis" placeholder="Ex.12003102"/><br>

    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="nama" placeholder="Ex.Agung Aryanto"/><br>

    <label for="tanggal_lahir">tanggal lahir :</label>
    <input type="date" name="tanggal_lahir"/> <br>

    <label for= "nilai">nilai:</label>
    <input type= "number" name= "nilai" placeholder= "EX.80.56"/><br>
    <br>
    <input type="submit" name="simpan" value="simpan data"/>
    <a href="input-datadiri.php"> kembali </a>
</form>

<?php
if(isset($_POST["simpan"])){
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $nilai = $_POST["nilai"];

    echo $nis . "<br>";
    echo $nama . "<br>";
    echo $tanggal_lahir . "<br>";
    echo $nilai . "<br>";

    // CREATE - Menambahkan Data ke Database
    $query = "
    INSERT INTO datadiri VALUES
    ('$nis','$nama','$tanggal_lahir','$nilai');
    ";
    include ('./input-config.php');
    $insert = mysqli_query($mysqli, $query);

    if ($insert){
        echo"
        <script>
        alert('data berhasil ditambahkan');
        window.location='input-datadiri.php';
        </script>

        ";
    }
}
?>