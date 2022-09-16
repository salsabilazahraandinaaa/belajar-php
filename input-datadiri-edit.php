<?php
if ( isset($_GET["nis"])){
    $nis = $_GET["nis"];
    $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis'; ";
    include('./input-config.php');
    $query = mysqli_query($mysqli,$check_nis );
    $row = mysqli_fetch_array($query);
    echo $row["namalengkap"];
}
?>
<h1>edit data</h1>
<form action="input-datadiri-edit.php" method="POST">
    <label for="nis">Nomor Induk Siswa:</label>
    <input value =<?php echo $row["nis"]; ?> type="number" name="nis" placeholder="Ex.12003102" readonly/><br>

    <label for="nama">Nama Lengkap:</label>
    <input value =<?php echo $row["namalengkap"]; ?>type="text" name="nama" placeholder="Ex.Agung Aryanto"/><br>

    <label for="tanggal_lahir">tanggal lahir :</label>
    <input value =<?php echo $row["tanggal_lahir"]; ?> type="date" name="tanggal_lahir"/> <br>

    <label for= "nilai">nilai:</label>
    <input value =<?php echo $row["nilai"]; ?> type= "number" name= "nilai" placeholder= "EX.80.56"/><br>
    <br>
    <input type="submit" name="edit" value="edit data"/>
    <a href="input-datadiri.php"> kembali </a>
</form>
<?php
if (isset($_POST["edit"])){
    $nis = $_POST["nis"];
    $nama = $_POST["nama"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $nilai = $_POST["nilai"];

    // EDIT - Memperbaharui data 
    $query = "
    UPDATE datadiri SET namalengkap = '$nama',
    tanggal_lahir = '$tanggal_lahir',
    nilai = '$nilai'
    WHERE nis = '$nis';
    ";
    include ('./input-config.php');
    $update = mysqli_query($mysqli,$query);

    if($update){
        echo "
        <script> 
        alert('Data diri berhasil diperbaharui');
        window.location='input-datadiri.php';
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