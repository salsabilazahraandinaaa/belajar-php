<?php
       include('./input-config.php');
       if ($_SESSION["login"] != TRUE) {
           header('location:login.php');
        }

   if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM datadiri WHERE nis = '$nis'; ";
        $query = mysqli_query($mysqli,$check_nis );
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit Data</h1>
<form action="input-datadiri-edit.php" method="POST"> 
    <label for="nis">Nomor Induk Siswa :</label><br>
    <input  value="<?php echo $row["nis"]; ?>" type="number" name="nis" placeholder="Ex. 12003102" readonly/><br>

    <label for="nama">Nama Lengkap :</label><br>
    <input value="<?php echo $row["namalengkap"]; ?>"type="text" name="nama" placeholder="Ex. Farel Vandin"/><br>

    <label for="tanggal_lahir">Tanggal Lahir :</label><br>
    <input value="<?php echo $row["tanggal_lahir"]; ?>"type="date" name="tanggal_lahir" /> <br>

    <label for="nilai" >Nilai:</label><br>
    <input value="<?php echo $row["nilai"]; ?>"type="number" name= "nilai" placeholder="Ex. 80.56"/><br><br>

    <input type="submit" name= "edit" value="Edit Data"/>
    <a href="input-datadiri.php"> Kembali </a>
</form>

<?php
    if( isset($_POST["edit"])){
        $nis= $_POST["nis"];
        $nama= $_POST["nama"];
        $tanggal_lahir= $_POST["tanggal_lahir"];
        $nilai= $_POST["nilai"];

        //UPDATE - Memperbarui Data
        $query = "
                UPDATE datadiri SET namalengkap = '$nama',
                tanggal_lahir = '$tanggal_lahir',
                nilai = '$nilai'
                WHERE nis = '$nis';
        ";

 
        $UPDATE = mysqli_query($mysqli, $query);

        if($UPDATE){
            echo "
            <script>
            alert('Data Berhasil Diperbaharui');
            window.location= 'input-datadiri.php';
            </script>
            ";
        }else{
            echo"
            <script>
            alert('Data gagal,');
            window.location= 'input-datadiri-edit.php?nis=$nis';
            </script>
            ";
        }
    }
?>