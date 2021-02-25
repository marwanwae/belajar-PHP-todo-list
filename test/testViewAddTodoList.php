<?php

require_once __DIR__ . "/../view/viewAddTodoList.php";
require_once __DIR__ . "/../BussinesLogic/showTodoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

AddTodoList('marwan');
AddTodoList('keren');
AddTodoList('banget');

viewAddTodoList();

ShowTodoList();