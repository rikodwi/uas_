<?php
session_start();

if (isset($_POST['login'])){

}else {
    header('location:login.php');
}
?>