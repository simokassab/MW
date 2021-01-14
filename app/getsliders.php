<?php

include_once('config/db_connect.php');

function getSliders()
{
    $mysqli = getConnected();
    $sql = "Select * FROM home";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}

?>