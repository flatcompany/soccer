<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/media.css">
    <?php
                include_once('../lib/function.php');
                include_once('../lib/database.php');
    ?>
    <title>Admin</title>
</head>
<body>

<?php

include_once('function.php');
include_once('database.php');


$name_1 = $_POST['team-one-red']; //Имя первой команды
$name_2 = $_POST['team-two-red']; //Имя второй команды
$score_1 = $_POST["number-one-red"]; //Счет первой команды
$score_2 = $_POST["number-two-red"]; //Счет второй команды
$date  = $_POST["date-red"]; //Дата матча


if (isset($_GET['red_id'])) {
    $sql = mysqli_query($link, "UPDATE `past_match` SET `team_1` = '$name_1',`team_2` = '$name_2',`score_1` = '$score_1', `score_2` = '$score_2', `date_match` = '$date' WHERE `id`={$_GET['red_id']}");
} else {
    //Иначе вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO `past_match` (`team_1`, `team_2`, `score_1` , `score_2` , `date_match`) VALUES ('$name_1', '$name_2', '$score_1', '$score_2', '$date')");
}


if (isset($_GET['red_id'])) {
    $sql = mysqli_query($link, "SELECT `id`, `team_1`, `team_2`, `score_1` , `score_2` , `date_match` FROM `past_match` WHERE `id`={$_GET['red_id']}");
    $past_match = mysqli_fetch_array($sql);
  }

?>


<?php
        $club = get_match();
        $team = get_team();
    ?>

<form action="" method = "post">
                        <h6>Изменить матч</h6>
                        
                        <div class="input-field col s12 m3">
                            <select name = "team-one-red" class="icons">                                                                                                                         
                                <option disabled selected>Выбрать команду</option>
                                <?php foreach($team as $teams): ?>
                                <option type = "text" data-icon="../<?=$teams['IMG']?>"> <?= isset($_GET['red_id']) ? $past_match['team_1'] : ''; ?>      <?=$teams['Team']?>    </option>
                                <?php endforeach; ?>
                            </select>
                            <label>Команда дома</label>
                        </div>
                        <div class="input-field col s12 m1">
                            <input name = "number-one-red" type="number" id="numhome" value="<?= isset($_GET['red_id']) ? $past_match['score_1'] : ''; ?> class="materialize-textarea"></input>
                            <label for="textarea1">Счёт 1</label>
                        </div>
                        <div class="input-field col s12 m4">
                            <input name = "date-red" type="date" class="materialize-textarea" value="<?= isset($_GET['red_id']) ? $past_match['date_match'] : ''; ?> " ></input>
                            <label for="textarea1">Дата</label>
                        </div>
                        <div class="input-field col s12 m1">
                            <input name = "number-two-red" type="number" id="numguest" value="<?= isset($_GET['red_id']) ? $past_match['score_2'] : ''; ?> class="materialize-textarea"></input>
                            <label for="textarea1">Счёт 2</label>
                        </div>
                        <div class="input-field col s12 m3">
                            <select name = "team-two-red" class="icons">
                                <option disabled selected>Выбрать команду</option>
                                <?php foreach($team as $teams): ?>
                                <option type = "text" data-icon="../<?=$teams['IMG']?>"> <?= isset($_GET['red_id']) ? $past_match['team_2'] : '';?> <?=$teams['Team']?>  </option>
                                <?php endforeach; ?>
                            </select>
                            <label>Команда в гостях</label>
                        </div>
                        <div class="col s12">
                            <button class="btn waves-effect waves-light btn-send-match" type="submit" name="action" >Добавить</button>
                        </div>
                    </form>


                    <?php
                            $sql = mysqli_query($link, 'SELECT `team_1`, `team_2`, `score_1` , `score_2` , `date_match` FROM `past_match`');
                            while ($result = mysqli_fetch_array($sql)) {
                                echo '<tr>' .
                                    "<td>{$result['team_1']}</td>" .
                                    "<td>{$result['team_2']}</td>" .
                                    "<td>{$result['score_1']}</td>" .
                                    "<td>{$result['score_2']}</td>" .
                                    "<td>{$result['date_match']}</td>" .
                                    "<td><a href='?del_id={$result['ID']}'>Удалить</a></td>" .
                                    "<td><a href='?red_id={$result['ID']}'>Изменить</a></td>" .
                                    '</tr>';
                            }
                    ?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>
                    