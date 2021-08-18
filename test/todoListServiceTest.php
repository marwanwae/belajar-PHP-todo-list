<?php
require_once __DIR__ . "/../entity/todoList.php";
// require_once __DIR__ . "/../repository/todoListRepositoryImpl.php";
require_once __DIR__ . "/../repository/todoListRepository.php";
// require_once __DIR__ . "/../service/todoListServiceImpl.php";
require_once __DIR__ . "/../service/todoListService.php";

use entity\todoList;
use repository\todoListRepositoryImpl;
use service\todoListServiceImpl;

function testShowTodoList()
{
    $todoListRepository = new todoListRepositoryImpl();
    $todoListRepository->todoList[1] = new todoList("marwan keren");
    $todoListRepository->todoList[2] = new todoList("marwan ganteng");
    $todoListRepository->todoList[3] = new todoList("marwan hebat");
    $todoListService = new todoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

function testAddTodoList()
{
    $todoListRepository = new todoListRepositoryImpl();
    $todoListService = new todoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("marwan keren");
    $todoListService->addTodoList("marwan hebat");
    $todoListService->addTodoList("marwan juara");

    $todoListService->showTodoList();
}

function testRemoveTodoList()
{
    $todoListRepository = new todoListRepositoryImpl();
    $todoListService = new todoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("marwan keren");
    $todoListService->addTodoList("marwan hebat");
    $todoListService->addTodoList("marwan juara");

    $todoListService->showTodoList();

    $todoListService->removeTodoList(1);
    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
}

testRemoveTodoList();