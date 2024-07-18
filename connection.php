<?php

$db_host = "ls-a145118603bd83d16dba1449dad688df92b73a26.c184giymajhp.us-east-2.rds.amazonaws.com";
$db_username = "dbmasteruser";
$db_password = "`qyMEeR6i9S)4t6{%k#*W%LV\$Z[Cj9Am";
$db_name = "dbmaster";

if(!$con = mysqli_connect($db_host, $db_username, $db_password, $db_name)) {
    die("Connection Failed");
}