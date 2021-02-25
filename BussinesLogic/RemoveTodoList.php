<?php
function RemoveTodoList(int $number)
{
    global $TodoList;

    if ($number > sizeof($TodoList)) {
        return false;
    }
    for ($i = $number; $i < sizeof($TodoList); $i++) {
        $TodoList[$i] = $TodoList[$i + 1];
    }
    unset($TodoList[sizeof($TodoList)]);
    return true;
}