<?php
if ( isset($_GET["kode_barang"])){
    $kode_barang = $_GET["kode_barang"];
    $check_kode_barang = "SELECT * FROM transaksi WHERE kode_barang = '$kode_barang' ";
    include('./kwu-config.php');
    $query = mysqli_query($mysqli,$check_kode_barang );
    $row = mysqli_fetch_array($query);
    echo $row["tanggal"];
}
?>
<h1>edit data</h1>
<form action="kwu-edit.php" method="POST">
    <label for="kode_barang">kodebarang:</label><br>
    <input value =<?php echo $row["kode_barang"]; ?> type="number" name="kode_barang" placeholder="Ex.12345678" /><br>

    <label for="tanggal">tanggal:</label><br>
    <input value =<?php echo $row["tanggal"]; ?> type="date" name="tanggal"/><br>

    <label for="pembeli">pembeli:</label><br>
    <input value =<?php echo $row["pembeli"]; ?> type="text" name="pembeli"/><br>

    <label for= "namabarang">nama barang:</label><br>
    <input value =<?php echo $row["namabarang"]; ?> type= "text" name= "namabarang" placeholder= "EX.indomie"/><br>

    <label for= "qty">jumlah barang:</label><br>
    <input value =<?php echo $row["qty"]; ?> type= "number" name= "qty" placeholder= "EX.3"/><br>

    <label for= "hargabeli">harga beli:</label><br>
    <input value =<?php echo $row["hargabeli"]; ?> type= "number" name= "hargabeli" placeholder= "EX.2500"/><br>

    <label for= "hargabeli">harga jual:</label><br>
    <input value =<?php echo $row["hargajual"]; ?> type= "number" name= "hargajual" placeholder= "EX.3000"/><br>

        
    <br>
    <input type="submit" name="edit" value="edit data"/>
    <a href="kwu.php"> kembali </a>
</form>
<?php
if (isset($_POST["edit"])){
    $kode_barang = $_POST["kode_barang"];
    $tanggal = $_POST["tanggal"];
    $pembeli = $_POST["pembeli"];
    $namabarang = $_POST["namabarang"];
    $qty = $_POST["qty"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];

    // EDIT - Memperbaharui data 
    $query = "
    UPDATE transaksi SET 
    tanggal = '$tanggal',
    pembeli = '$pembeli',
    namabarang = '$namabarang',
    qty = '$qty',
    hargabeli = '$hargabeli',
    hargajual = '$hargajual'
    WHERE kode_barang = '$kode_barang';
    ";
    include ('./kwu-config.php');
    $update = mysqli_query($mysqli,$query);

    if($update){
        echo "
        <script> 
        alert('Data diri berhasil diperbaharui');
        window.location='kwu.php?kode_barang=$kode_barang';
        </script>
        ";
    }else{
        echo"
        <script>
        alert('Data gagal');
        window.location='kwu-edit.php?kode_barang=$kode_barang';
        </script>
        ";
    }
}
?>