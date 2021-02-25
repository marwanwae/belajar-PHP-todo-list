<?php

require_once __DIR__ . "/model/TodoList.php";
require_once __DIR__ . "/BussinesLogic/showTodoList.php";
require_once __DIR__ . "/BussinesLogic/AddTodoList.php";
require_once __DIR__ . "/BussinesLogic/RemoveTodoList.php";
require_once __DIR__ . "/view/viewShowTodoList.php";
require_once __DIR__ . "/view/viewAddTodoList.php";
require_once __DIR__ . "/view/viewRemoveTodoList.php";
require_once __DIR__ . "/helper/input.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();