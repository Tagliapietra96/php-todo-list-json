<?php
$tasks = file_get_contents('../json/todolist.json');
$tasks = json_decode($tasks, true);
$index = (int)$_POST["index"];
var_dump($_POST);
array_splice($tasks, $index, 1);
$tasks = json_encode($tasks, JSON_PRETTY_PRINT);
file_put_contents('../json/todolist.json', $tasks);
header("Content-Type: application/json");
?>