<?php
session_start();
session_destroy();

//kembali/redirect ke halaman login.php
?> <script>
 	window.location='./login.blade.php';
 </script>
<?php
?>