<?php
$tel=filter_var(trim($_POST['tel']),FILTER_SANITIZE_STRING);
$name=filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$dataa=filter_var(trim($_POST['dataa']),FILTER_SANITIZE_STRING);
if($tel==""){ 
    echo "Недупустимая длина логина";
    exit();}
elseif(mb_strlen($name)<3||mb_strlen($name)>50){
    echo "Недупустимая длина имени";
    exit();}

$mysqli=new mysqli("localhost","s90618cw_1","123Vad!","s90618cw_1");
$mysqli->query("INSERT INTO `telefoni` (`tel`, `name`, `dataa`) VALUES('$tel','$name','$dataa')");
$mysqli->close();

?>