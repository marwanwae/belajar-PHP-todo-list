<?php

function ShowTodoList()
{
    global $TodoList;

    echo "TODOLIST" . PHP_EOL;

    foreach ($TodoList as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
}