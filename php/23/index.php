<?php

function print_arr($arr) {
  echo '<pre>' . print_r($arr, true) . '</pre>';
}

$db = @mysqli_connect('localhost', 'root', '', 'gb') or die('Ошибка соединения с БД');
if (!$db) die(mysqli_connect_error());

mysqli_set_charset($db, "utf8") or die('Не установленна кодировка');
$str = "d'Artanian";
/* $insert = "INSERT INTO gb (name, text) VALUES ('Oly', 'Lorem ipsum dolor sit amet, consectetur adipisicing.')";

$res_insert = mysqli_query($db, $insert);
if ($res_insert) echo 'OK';
else echo "Error";
echo mysqli_error($db); */

/* $update = "UPDATE gb SET text = CONCAT(text, '|||') WHERE id > 4";
$res_update = mysqli_query($db, $update) or die(mysqli_error($db)); */
/* 
$delete = "DELETE FROM gb WHERE id > 4";
$res_delete = mysqli_query($db, $delete) or die(mysqli_error($db));
echo mysqli_affected_rows($db); */
$str = mysqli_real_escape_string($db, $str);
$query = "INSERT INTO gb (name, text) VALUES ('$str', 'имя с апострофом')";
mysqli_query($db, $query) or die(mysqli_error($db));

$res = mysqli_query($db, "SELECT id, name, text, date FROM gb ORDER BY id DESC");
echo mysqli_num_rows($res);
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);

// $date2 = [];
/* $data2 = [];
while ($row = mysqli_fetch_assoc($res)) {
  $data2[$row['id']] = $row;
}

print_arr($data2); */

foreach ($data as $item) {
  echo "Name: {$item['name']} <br>";
  echo "Text: {$item['text']} <br>";
  echo "Date: {$item['date']} <br><hr>";
}


