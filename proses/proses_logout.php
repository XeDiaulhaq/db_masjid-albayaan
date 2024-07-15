<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
session_destroy();
echo "<script>
alert('Anda telah logout');
window.location='login';
</script>";
?>
