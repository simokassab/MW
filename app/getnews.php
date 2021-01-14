<?php

include_once('config/db_connect.php');

function getNews()
{
    $mysqli = getConnected();
    $sql = "Select * FROM news";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}
 ?>