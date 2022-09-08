<form action="input-siswa.php" method="POST">
    <label for="nis">Nomor Induk Siswa:</label>
    <input type="number" name="nis" placeholder="Ex.12003102"/><br>

    <label for="nama">Nama Lengkap:</label>
    <input type="text" name="nama" placeholder="Ex.Agung Aryanto"/><br>

    <label for="jk">Jenis Kelamin:</label>
    <input type="radio" name="jk" value="L"/> Laki-laki
    <input type="radio" name="jk" value="P"/> Perempuan<br>

    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" placeholder="Ex.11 RPL 2"/><br>

    <label for="tanggal_lahir">tanggal lahir :</label>
    <input type="date" name="tanggal_lahir"/> <br>

    <label for="Alamat">Alamat:</label>
    <textarea name="alamat" placeholder="Ex. Jl. Arief Rahman"></textarea> <br>

    <label for="eskul">Esktrakurikuler:</label>
    <select name="eskul"> <br>
        <option>Pramuka</option>
        <option>Paskibra</option>
        <option>BTQ</option>
        <option>Futsal</option>
        <option>Basketball</option>
        <opyion>Marching Band</option>
    </select><br>

    <label for= "nilai">nilai:</label>
    <input type= "number" name= "nilai" placeholder= "EX.80.56"/><br>

    <input type="submit" name="simpan" value="simpan data"/>
    <input type="reset" name="rest" value="reset input"/>
</form>

<?php
    if(isset ($_POST["simpan"]) ){
        echo"<hr>";

        // Deklarasi Variabel
        $nis = $_POST ["nis"];
        $namalengkap = $_POST ["nama"];
        $jeniskelamin = $_POST ["jk"];
        $kelas = $_POST ["kelas"];
        $tanggal_lahir = date('l, d F y', strtotime($_POST["tanggal_lahir"]));
        $alamat = $_POST ["alamat"];
        $eskul = $_POST ["eskul"];
        $nilai = $_POST ["nilai"];

        if ($nilai >= 78) {
            $status = "lulus";
        }else {
            $status = "Belum lulus";
        }

        // Tampil data variabel
        echo "
            Hasil inputan sebagai berikut: <br>
            Nomor induk siswa : $nis <br>
            Nama lengkap : $namalengkap <br>
            Jenis kelamin : $jeniskelamin <br>
            Kelas : $kelas <br>
            tanggal lahir : $tanggal_lahir <br>
            Alamat : $alamat <br>
            Ekstrakurikuler: $eskul <br>
            Nilai : $nilai <br>
            Status Kelulusan : $status
        ";
    }
?>   