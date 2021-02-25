<?php
function AddTodoList(string $todo)
{
    global $TodoList;

    $number = sizeof($TodoList) + 1;

    $TodoList[$number] = $todo;
}