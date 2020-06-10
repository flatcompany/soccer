<?php

include_once('function.php');
include_once('database.php');


$name_1 = $_REQUEST['team-one']; //Имя первой команды
$sql = "SELECT * FROM `team` WHERE `Team` = '$name_1' ";
$res = mysqli_query($link, $sql);

$img_1 = get_img($res); //Лого первой команды


$name_2 = $_REQUEST['team-two']; //Имя второй команды

$sql = "SELECT * FROM `team` WHERE `Team` = '$name_2' ";
$res = mysqli_query($link, $sql);

$img_2 = get_img($res); //Лого второй команды

$score_1 = $_POST["number-one"]; //Счет первой команды
$score_2 = $_POST["number-two"]; //Счет второй команды

$date  = $_POST["date"]; //Дата матча
$time = $_POST["time"]; //Время матча


$sql = "INSERT INTO past_match (img_1, img_2, team_1, team_2, score_1, score_2, date_match, time_match) VALUES ('$img_1', '$img_2', '$name_1', '$name_2', '$score_1', '$score_2', '$date', '$time')";

if (mysqli_query($link, $sql)) {
    header("Location: ../page/admin.php");
      echo "Матч успешно добавлен";
} else {
      echo "Ошибка: " . $sql . "<br>" . mysqli_error($link);
}
mysqli_close($link);



?>