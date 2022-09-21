<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis">Nomor Induk Siswa:</label><br>
    <input type="number" name="nis" placeholder="Ex.12003102"/><br>

    <label for="nama">Nama Lengkap:</label><br>
    <input type="text" name="nama" placeholder="Ex.Agung Aryanto"/><br>

    <label for="kelas">Kelas:</label><br>
    <input type="text" name="kelas"/> <br>

    <label for= "kehadiran">Nilai kehadiran:</label><br>
    <input type= "number" name= "kehadiran" placeholder= "EX.80.56"/><br>

    <label for= "tugas">Nilai Tugas:</label><br>
    <input type= "number" name= "tugas" placeholder= "EX.80.56"/><br>

    <label for= "UTS">Nilai UTS:</label><br>
    <input type= "number" name= "UTS" placeholder= "EX.80.56"/><br>

    <label for= "UAS">Nilai UAS:</label><br>
    <input type= "number" name= "UAS" placeholder= "EX.80.56"/><br>
    <br>
    <input type="submit" name="simpan" value="simpan data"/>
    <a href="input-datadiri.php"> kembali </a>
</form>
<?php
    include('./input-config.php');
    echo "<a href= 'input-datadiri-tambah.php'>tambah data</a>";
    echo "<hr>";

    // Menampilkan data dari database
    $no =1;
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM nilai");
    while($row = mysqli_fetch_array($data)){
        $tabledata .="
        <tr>
            <td>".$no.".</td>
            <td>".$row["nis"]."</td>
            <td>".$row["nama_lengkap"]."</td>
            <td>".$row["kelas"]."</td>
            <td>".$row["kehadiran"]."</td>
            <td>".$row["Tugas"]."</td>
            <td>".$row["UTS"]."</td>
            <td>".$row["UAS"]."</td>
            <td>

            <a href='input-datadiri-edit.php?nis=".$row["nis"]."'>edit</a>
            &nbsp;-&nbsp;
            <a href='input-datadiri-hapus.php?nis=".$row["nis"]."'
            onclick'return cofirm(\"Yakin dek ?\");'>hapus</a>

            </td>
        </tr>
    ";
    $no++;
    }

    echo "
    <table cellpadding=5 border=1 cellspacing=0>
        <tr>
          <th>no</th>
          <th>NIS</th>
          <th>Nama Lengkap</th>
          <th>kelas</th>
          <th>kehadiran</th>
          <th>Tugas</th>
          <th>UTS</th>
          <th>UAS</th>
          <th>Aksi</th>
        </tr>
         $tabledata
    </table>
    ";
?>