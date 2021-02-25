<?php

require_once __DIR__ . "/../view/viewShowTodoList.php";
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";

AddTodoList("marwan");
AddTodoList("keren");

viewShowTodoList();