<?php
session_start();
if($_SESSION['shoppingCart']) {
    $arr = array();
    array_push($arr, $_GET['val']);
    $_SESSION['shoppingCart'] = $arr;
}
else {
    $arr = array();
    $arr = $_SESSION['shoppingCart'];
    array_push($arr, $_GET['val']);
}
header('Location: main.php');
?>