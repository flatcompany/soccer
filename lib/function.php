<?php

function get_match() {
    global $link;
    $sql = "SELECT * FROM past_match ORDER BY id DESC";
    $result = mysqli_query($link, $sql);
    $past_match = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $past_match;
}

function get_team() {
    global $link;
    $sql = "SELECT * FROM team";
    $result = mysqli_query($link, $sql);
    $team = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $team;
}

function get_img($res) { 
    // Проверка на то, что строк больше нуля
    if ($res -> num_rows > 0) {
        // Цикл для вывода данных
        while ($row = $res -> fetch_assoc()) {
            // Получаем массив с строками которые нужно выводить
            $arr = ($row);
            // Вывод данных
            return $row['IMG'];
        }
    // Если данных нет
    } else {
        echo "Не кто не найден";
    }
}


?>