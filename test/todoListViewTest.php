<?php

require_once __DIR__ . "/../helper/inputHelper.php";
require_once __DIR__ . "/../repository/todoListRepository.php";
require_once __DIR__ . "/../service/todoListService.php";
require_once __DIR__ . "/../view/todoListView.php";
require_once __DIR__ . "/../entity/todoList.php";

use repository\todoListRepositoryImpl;
use service\todoListServiceImpl;
use todoListView\todoListView;
use entity\todoList;

function testViewTodoList()
{
    $todoListRepository = new todoListRepositoryImpl();
    $todoListService = new todoListServiceImpl($todoListRepository);
    $todoListView = new todoListView($todoListService);

    $todoListService->addTodoList("belajar PHP dasar");
    $todoListService->addTodoList("belajar PHP OOP");
    $todoListService->addTodoList("belajar PHP database");
    $todoListService->addTodoList("belajar PHP todolist");

    $todoListView->showTodoList();
}

testViewTodoList();