<?php
$link = mysqli_connect('localhost', 'root', '', 'soccer');

if(mysqli_connect_errno()) 
{
    echo 'Ошибка в подключении к базе данных ('.mesqli_connect_errno().'): '.mysqli_connect_error();
    exit();
}
?>