<?php

require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";
require_once __DIR__ . "/../BussinesLogic/ShowTodoList.php";
require_once __DIR__ . "/../BussinesLogic/RemoveTodoList.php";


AddTodoList('marwan keren');
AddTodoList('marwan ganteng');
AddTodoList('marwan biasa aja');

ShowTodoList();
RemoveTodoList(2);
ShowTodoList();
$status = RemoveTodoList(4);
var_dump($status);