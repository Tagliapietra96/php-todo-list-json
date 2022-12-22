<?php
$tasks = file_get_contents('../json/todolist.json');
header("Content-Type: application/json");
echo $tasks;
?>