<?php
    if ( isset($_GET["nis"]) ){
        $nis = $_GET["nis"];
        
        $query = "
            DELETE FROM nilai
            WHERE nis = '$nis';
            ";

        include ('./input-config.php');
        $delete = mysqli_query($mysqli, $query);

            if ($delete){
                echo "
                <script>
                alert('Data Berhasil Dihapus');
                window.location= 'input-datadiri.php';
                </script>
                ";
            }else{
                echo "
                <script>
                alert('Data Gagal');
                window.location= 'input-datadiri.php';
                </script>
                ";
}
}
?>