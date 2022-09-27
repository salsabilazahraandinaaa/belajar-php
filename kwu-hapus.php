<?php
    if ( isset($_GET["kode_barang"]) ){
        $kode_barang = $_GET["kode_barang"];
        
        $query = "
            DELETE FROM transaksi
            WHERE kode_barang = '$kode_barang';
            ";

        include ('./kwu-config.php');
        $delete = mysqli_query($mysqli, $query);

            if ($delete){
                echo "
                <script>
                alert('Data Berhasil Dihapus');
                window.location= 'kwu.php';
                </script>
                ";
            }else{
                echo "
                <script>
                alert('Data Gagal');
                window.location= 'kwu.php';
                </script>
                ";
}
}
?>