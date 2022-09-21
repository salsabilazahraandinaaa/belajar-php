<h1>tambah data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa:</label><br>
    <input type="number" name="nis" placeholder="Ex.12003102"/><br>

    <label for="nama">Nama Lengkap:</label><br>
    <input type="text" name="nama" placeholder="Ex.Agung Aryanto"/><br>

    <label for="kelas">Kelas:</label><br>
    <input type="text" name="kelas"/> <br>

    <label for= "kehadiran">Nilai kehadiran:</label><br>
    <input type= "number" name= "kehadiran" placeholder= "EX.80.56"/><br>

    <label for= "Tugas">Nilai Tugas:</label><br>
    <input type= "number" name= "Tugas" placeholder= "EX.80.56"/><br>

    <label for= "UTS">Nilai UTS:</label><br>
    <input type= "number" name= "UTS" placeholder= "EX.80.56"/><br>

    <label for= "UAS">Nilai UAS:</label><br>
    <input type= "number" name= "UAS" placeholder= "EX.80.56"/><br>
    <br>
    <input type="submit" name="simpan" value="simpan data"/>
    <a href="input-datadiri.php"> kembali </a>
</form>
<?php
if(isset($_POST["simpan"])){
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $kehadiran = $_POST["kehadiran"];
    $Tugas = $_POST["Tugas"];
    $UTS = $_POST["UTS"];
    $UAS = $_POST["UAS"];

    echo $nis . "<br>";
    echo $nama . "<br>";
    echo $kelas . "<br>";
    echo $Tugas . "<br>";
    echo $kehadiran . "<br>";
    echo $UTS . "<br>";
    echo $UAS . "<br>";




    // CREATE - Menambahkan Data ke Database
    $query = "
    INSERT INTO nilai VALUES
    ('$nis','$nama','$kelas','$kehadiran','$Tugas','$UTS','$UAS');
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