<?php

include_once('config/db_connect.php');

function getProducts()
{
    $mysqli = getConnected();
    $sql = "Select * FROM products";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}

?>