<?php
if ( isset($_GET["nis"])){
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM nilai WHERE nis = '$nis'; ";
    include('./siswa-config.php');
    $query = mysqli_query($mysqli,$check_nis );
    $row = mysqli_fetch_array($query);
    echo $row["nama_lengkap"];
}
?>
<h1>edit data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="nis">Nomor Induk Siswa:</label><br>
    <input value =<?php echo $row["nis"]; ?> type="number" name="nis" placeholder="Ex.12003102" readonly/><br>

    <label for="nama_lengkap">Nama Lengkap:</label><br>
    <input value =<?php echo $row["nama_lengkap"]; ?>type="text" name="nama" placeholder="Ex.Agung Aryanto" /><br>

    <label for="kelas">Kelas:</label><br>
    <input value =<?php echo $row["kelas"]; ?> type="text" name="kelas" placeholder=""/><br>

    <label for= "kehadiran">Nilai Kehadiran:</label><br>
    <input value =<?php echo $row["kehadiran"]; ?> type= "number" name= "kehadiran" placeholder= "EX.80.56"/><br>

    <label for= "Tugas">Nilai Tugas:</label><br>
    <input value =<?php echo $row["Tugas"]; ?> type= "number" name= "Tugas" placeholder= "EX.80.56"/><br>

    <label for= "UTS">Nilai UTS:</label><br>
    <input value =<?php echo $row["UTS"]; ?> type= "number" name= "UTS" placeholder= "EX.80.56"/><br>

    <label for= "UAS">Nilai UAS:</label><br>
    <input value =<?php echo $row["UAS"]; ?> type= "number" name= "UAS" placeholder= "EX.80.56"/><br>

        
    <br>
    <input type="submit" name="edit" value="edit data"/>
    <a href="input-datadiri.php"> kembali </a>
</form>
<?php
if (isset($_POST["edit"])){
    $nis = $_POST["nis"];
    $nama_lengkap = $_POST["nama"];
    $kelas = $_POST["kelas"];
    $kehadiran = $_POST["kehadiran"];
    $Tugas = $_POST["Tugas"];
    $UTS = $_POST["UTS"];
    $UAS = $_POST["UAS"];

    // EDIT - Memperbaharui data 
    $query = "
    UPDATE nilai SET nama_lengkap = '$nama_lengkap',
    kelas = '$kelas',
    kehadiran = '$kehadiran',
    Tugas = '$Tugas',
    UTS = '$UTS',
    UAS = '$UAS'
    WHERE nis = '$nis';
    ";
    include ('./siswa-config.php');
    $update = mysqli_query($mysqli,$query);

    if($update){
        echo "
        <script> 
        alert('Data diri berhasil diperbaharui');
        window.location='input-datadiri.php?nis=$nis';
        </script>
        ";
    }else{
        echo"
        <script>
        alert('Data gagal');
        window.location='input-datadiri-edit.php?nis=$nis';
        </script>
        ";
    }
}
?>