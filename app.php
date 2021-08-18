<?php

require_once __DIR__ . "/entity/todoList.php";
require_once __DIR__ . "/helper/inputHelper.php";
require_once __DIR__ . "/repository/todoListRepository.php";
require_once __DIR__ . "/service/todoListService.php";
require_once __DIR__ . "/view/todoListView.php";

use todoListView\todoListView;
use service\todoListServiceImpl;
use repository\todoListRepositoryImpl;

echo "Aplikasi TodoList" . PHP_EOL;

$todoListRepository = new todoListRepositoryImpl();
$todoListService = new todoListServiceImpl($todoListRepository);
$todoListView = new todoListView($todoListService);

$todoListView->showTodoList();