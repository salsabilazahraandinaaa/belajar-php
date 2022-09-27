<h1>tambah data</h1>
<form action="kwu-tambah.php" method="POST">
    <label for="kode_barang">kodebarang:</label><br>
    <input type="number" name="kode_barang" placeholder="Ex.12345678"/><br>

    <label for="tanggal">tanggal:</label><br>
    <input type="date" name="tanggal"/><br>

    <label for="pembeli">Pembeli:</label><br>
    <input type="text" name="pembeli"/> <br>

    <label for= "namabarang">Nama Barang:</label><br>
    <input type= "text" name= "namabarang" placeholder= "EX.indomie"/><br>

    <label for= "qty">jumlah barang:</label><br>
    <input type= "number" name= "qty" placeholder= "EX.3"/><br>

    <label for= "hargabeli">Harga Beli:</label><br>
    <input type= "number" name= "hargabeli" placeholder= "EX.2500"/><br>

    <label for= "hargajual">Harga Jual:</label><br>
    <input type= "number" name= "hargajual" placeholder= "EX.3000"/><br>
    <br>
    <input type="submit" name="simpan" value="simpan data"/>
    <a href="kwu.php"> kembali </a>
</form>
<?php
if(isset($_POST["simpan"])){
    $kode_barang = $_POST["kode_barang"];
    $tanggal = $_POST["tanggal"];
    $pembeli = $_POST["pembeli"];
    $namabarang = $_POST["namabarang"];
    $qty = $_POST["qty"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];

    echo $kode_barang . "<br>";
    echo $tanggal . "<br>";
    echo $pembeli . "<br>";
    echo $namabarang . "<br>";
    echo $qty . "<br>";
    echo $hargabeli . "<br>";
    echo $hargajual . "<br>";




    // CREATE - Menambahkan Data ke Database
    $query = "
    INSERT INTO transaksi VALUES
    ('$kode_barang','$tanggal','$pembeli','$namabarang','$qty','$hargabeli','$hargajual');
    ";
    include ('./kwu-config.php');
    $insert = mysqli_query($mysqli, $query);

    if ($insert){
        echo"
        <script>
        alert('data berhasil ditambahkan');
        window.location='kwu.php';
        </script>

        ";
    }
}
?>