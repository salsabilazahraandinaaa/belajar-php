<form action="kwu-tambah.php" method="POST">
    <label for="kode_barang">kodebarang:</label><br>
    <input type="number" name="kode_barang" placeholder="Ex.12345678"/><br>

    <label for="tanggal">tanggal:</label><br>
    <input type="date" name="tanggal"/><br>

    <label for="pembeli">pembeli:</label><br>
    <input type="text" name="pembeli"/> <br>

    <label for= "namabarang">nama barang:</label><br>
    <input type= "text" name= "namabarang" placeholder= "EX.indomie"/><br>

    <label for= "qty">jumlah barang:</label><br>
    <input type= "number" name= "qty" placeholder= "EX.3"/><br>

    <label for= "hargabeli">harga beli:</label><br>
    <input type= "number" name= "hargabeli" placeholder= "EX.2500"/><br>

    <label for= "hargajual">harga jual:</label><br>
    <input type= "number" name= "hargajual" placeholder= "EX.3000"/><br>
    <br>
    <input type="submit" name="simpan" value="simpan data"/>
    <a href="kwu.php"> kembali </a>
</form>
<?php
    include('./kwu-config.php');
    echo "<a href= 'kwu-tambah.php'>tambah data</a>";
    echo "<hr>";

    // Menampilkan data dari database
    $no =1;
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM transaksi");
    while($row = mysqli_fetch_array($data)){


        $totalhargabeli=
        ($row["qty"]*
        $row["hargabeli"]);

        $totalhargajual=
        ($row["qty"]*
        $row["hargajual"]);

        $laba=($totalhargajual - $totalhargabeli);

        $persentase=   (
            $laba / $totalhargabeli) * 100;
        $tabledata .="
        <tr>
            <td>".$no.".</td>
            <td>".$row["kode_barang"]."</td>
            <td>".$row["tanggal"]."</td>
            <td>".$row["pembeli"]."</td>
            <td>".$row["namabarang"]."</td>
            <td>".$row["qty"]."</td>
            <td>".$row["hargabeli"]."</td>
            <td>".$row["hargajual"]."</td>

            <td>$totalhargabeli</td>
            <td>$totalhargajual</td>
            <td>$laba</td>
            <td>$persentase %</td>
            <td>

            <a href='kwu-edit.php?kode_barang=".$row["kode_barang"]."'>edit</a>
            &nbsp;-&nbsp;
            <a href='kwu-hapus.php?kode_barang=".$row["kode_barang"]."'
            onclick'return cofirm( \"Yakin dek ?\" );>hapus</a>

            </td>
        </tr>
    ";
    $no++;
    }

    echo "
    <table cellpadding=5 border=1 cellspacing=0>
        <tr>
          <th>no</th>
          <th>kode_barang</th>
          <th>tanggal</th>
          <th>pembeli</th>
          <th>namabarang</th>
          <th>qty</th>
          <th>hargabeli</th>
          <th>hargabarang</th>
          <th>total harga beli</th>
          <th>total beli jual</th>
          <th>laba</th>
          <th>persentase laba</th>
          <th>aksi</th>
        </tr>
         $tabledata
    </table>
    ";
?>