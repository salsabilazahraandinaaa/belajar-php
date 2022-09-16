<?php
    include('./input-config.php');
    echo "<a href= 'input-datadiri-tambah.php'>tambah data</a>";
    echo "<hr>";

    // Menampilkan data dari database
    $no =1;
    $tabledata = "";
    $data = mysqli_query($mysqli,"SELECT * FROM datadiri");
    while($row = mysqli_fetch_array($data)){
        $tabledata .="
        <tr>
            <td>".$no.".</td>
            <td>".$row["nis"]."</td>
            <td>".$row["namalengkap"]."</td>
            <td>".$row["tanggal_lahir"]."</td>
            <td>".$row["nilai"]."</td>
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
          <th>Tanggal Lahir</th>
          <th>Nilai</th>
          <th>Aksi</th>
        </tr>
         $tabledata
    </table>
    ";
?>