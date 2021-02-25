<?php
require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../helper/input.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "ADD TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal) ");

    if ($todo == 'x') {
        // batal
        echo 'batal menamnah todo' . PHP_EOL;
    } else {
        AddTodoList($todo);
    }
}