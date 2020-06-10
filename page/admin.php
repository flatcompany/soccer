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

    <div class="admin">
    <?php
        $club = get_match();
        $team = get_team();
    ?>
   
        <div class="container list">
            <div class="row">
                <div class="last-match">
                    <form action="../lib/play-check.php" method = "post">
                        <h6>Добавишь прошедший матч</h6>
                        
                        <div class="input-field col s12 m3">
                            <select name = "team-one" class="icons">                                                                                                                         
                                <option disabled selected>Выбрать команду</option>
                                <?php foreach($team as $teams): ?>
                                <option type = "text" data-icon="../<?=$teams['IMG']?>"><?=$teams['Team']?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Команда дома</label>
                        </div>
                        <div class="input-field col s12 m1">
                            <input name = "number-one" type="number" id="numhome" class="materialize-textarea"></input>
                            <label for="textarea1">Счёт 1</label>
                        </div>
                        <div class="input-field col s12 m2">
                            <input name = "date" type="text" class="datepicker"></input>
                            <label for="textarea1">Дата</label>
                        </div>
                        <div class="input-field col s12 m2">
                            <input name = "time" type="text" class="timepicker"></input>
                            <label for="textarea1">Время</label>
                        </div>
                        <div class="input-field col s12 m1">
                            <input name = "number-two" type="number" id="numguest" class="materialize-textarea"></input>
                            <label for="textarea1">Счёт 2</label>
                        </div>
                        <div class="input-field col s12 m3">
                            <select name = "team-two" class="icons">
                                <option disabled selected>Выбрать команду</option>
                                <?php foreach($team as $teams): ?>
                                <option type = "text" data-icon="../<?=$teams['IMG']?>"><?=$teams['Team']?></option>
                                <?php endforeach; ?>
                            </select>
                            <label>Команда в гостях</label>
                        </div>
                        <div class="col s12">
                            <button class="btn waves-effect waves-light btn-send-match" type="submit" name="action">Добавить</button>
                        </div>
                    </form>                    
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="past_table">
                        <table class="responsive-table">
                            <thead>
                                <tr>
                                    <th>Команда дома</th>
                                    <th>Счёт первой команды</th>
                                    <th>Дата</th>
                                    <th>Время</th>
                                    <th>Счёт второй команды</th>
                                    <th>Команда в гостях</th>
                                    <th>Изменить</th>
                                    <th>Удалить</th>
                                </tr>
                            </thead>

                            <tbody>
                            <?php foreach($club as $clubs): ?>

                                <tr>
                                    <td><?=$clubs['team_1']?></td>
                                    <td><?=$clubs['score_1']?></td>
                                    <td><?=$clubs['date_match']?></td>
                                    <td><?=$clubs['time_match']?></td>
                                    <td><?=$clubs['score_2']?></td>
                                    <td><?=$clubs['team_2']?></td>
                                    <td><a href="../lib/edit.php?red_id=<?=$clubs['id']?>"><i class="Small material-icons">create</i></a></td>
                                    <td><a href="../lib/remove.php?id=<?=$clubs['id']?>" ><i class="Small material-icons">block</i></a></td>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>