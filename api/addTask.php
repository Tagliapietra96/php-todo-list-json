<?php
$tasks = file_get_contents('../json/todolist.json');
$tasks = json_decode($tasks, true);
$newTask = [
    "description" => $_POST["description"],
    "isDone" => $_POST["isDone"]
];
$tasks[] = $newTask;
$tasks = json_encode($tasks, JSON_PRETTY_PRINT);
file_put_contents('../json/todolist.json', $tasks);
header("Content-Type: application/json");
?>