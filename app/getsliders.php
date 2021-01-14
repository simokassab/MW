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

function get5Partners()
{
    $mysqli = getConnected();
    $sql = "Select * FROM partners order by created_at DESC LIMIT 5;";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}


function get5Operators()
{
    $mysqli = getConnected();
    $sql = "Select * FROM operators order by created_at DESC LIMIT 5;";
    $Rslt = mysqli_query($mysqli, $sql);
    if ($Rslt) {
        $rows = mysqli_fetch_all($Rslt, MYSQLI_ASSOC);
        return $rows;
    } else {
        return "";
    }
}

?>