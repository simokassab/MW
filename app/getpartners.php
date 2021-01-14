<?php

include_once('config/db_connect.php');

function getPartners()
{
    $mysqli = getConnected();
    $sql = "Select * FROM partners order by created_at ASC";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}

?>