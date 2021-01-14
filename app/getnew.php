<?php

include_once('config/db_connect.php');

function getNewById($id)
{
    $mysqli = getConnected();
    $sql = "Select * FROM news where id=$id";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}
 ?>