<?php

$db_user="root";
$db_pass="1111";
$db_name="registation";

$db=new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
?>