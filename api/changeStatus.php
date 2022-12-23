<?php
$tasks = file_get_contents('../json/todolist.json');
$tasks = json_decode($tasks, true);
$index = (int)$_POST["index"];
if($tasks[$index]["isDone"] === 'true'){
    $tasks[$index]["isDone"] = 'false';
}else{
    $tasks[$index]["isDone"] = 'true';
}
$tasks = json_encode($tasks, JSON_PRETTY_PRINT);
file_put_contents('../json/todolist.json', $tasks);
header("Content-Type: application/json");
?>