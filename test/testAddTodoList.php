<?php
require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

AddTodoList('marwan biasa aja');
AddTodoList('marwan keren');
AddTodoList('marwan ganteng');


var_dump($TodoList);