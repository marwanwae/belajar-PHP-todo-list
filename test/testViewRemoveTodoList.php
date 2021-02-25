<?php

require_once __DIR__ . "/../BussinesLogic/RemoveTodoList.php";
require_once __DIR__ . "/../view/viewShowTodoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

AddTodoList('marwan keren');
AddTodoList('marwan ganteng');
AddTodoList('anjay');

ShowTodoList();

viewRemoveTodoList();

ShowTodoList();