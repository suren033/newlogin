<?php
    $var_name = $_POST["var_name"];
    $var_value = $_POST["var_value"];
    $var_name = $_POST["var_description"];
    $var_name = $_POST["var_num"];
    $var_name = $_POST["var_loremtext"];

    include('../conf/connectDb.php');

    $query = $db->query(" UPDATE `conf` SET `value`='$var_value' WHERE `name`='$var_name' ");

    header('location: index.php');
?>