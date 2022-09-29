<?php
    include('./input-config.php');

    session_destroy();

    echo "
 <script> 
    alert('Logout berhasi');
    window.location='login.php';
 </script>
    ";
?>    