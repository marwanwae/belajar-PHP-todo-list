<?php

// namespace service;

// use repository\todoListRepository;

// class todoListServiceImpl implements todoListService
// {

//     private todoListRepository $todoListRepository;

//     public function __construct(todoListRepository $todoListRepository)
//     {
//         return $this->todoListRepository = $todoListRepository;
//     }

//     public function showTodoList()
//     {

//         echo "TODOLIST" . PHP_EOL;
//         $TodoList = $this->todoListRepository->findAll();
//         foreach ($TodoList as $number => $value) {
//             echo "$number. $value" . PHP_EOL;
//         }
//     }

//     public function addTodoList(string $todo)
//     {
//     }

//     public function removeTodoList(int $number)
//     {
//     }
// }