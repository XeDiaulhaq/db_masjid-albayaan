<?php
$username = (isset($_POST['username']) ) ? htmlentities($_POST['username'])  : "" ; 
$password = (isset($_POST['password']) ) ? htmlentities($_POST['password'])  : "" ; 
if (!empty($_POST['submit_validate'])){
    if ($username == "dhiaul001@gmail.com" && $password == "a"){
        header('location:../home');
} 
    
}else?>
<script>
    alert('username atau password salah');
    window.location='../login'
</script>
<php 
?>