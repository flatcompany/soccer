<?php

include_once('function.php');
include_once('database.php');

if(isset($_GET['id']))
{   
    $id = mysqli_real_escape_string($link, $_GET['id']);
     
    $query ="DELETE FROM past_match WHERE id = '$id'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
    header("Location: ../page/admin.php");
}

?>
