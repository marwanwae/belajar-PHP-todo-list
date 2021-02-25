<?php

require_once __DIR__ . "/../model/TodoList.php";
require_once __DIR__ . "/../BussinesLogic/showTodoList.php";
require_once __DIR__ . "/../view/viewAddTodoList.php";
require_once __DIR__ . "/../view/viewRemoveTodoList.php";
require_once __DIR__ . "/../helper/input.php";

function viewShowTodoList()
{
    while (true) {
        ShowTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "X. Exit" . PHP_EOL;

        $pilihan = input("Pilih");
        if ($pilihan == "1") {
            // view tambah todo
            viewAddTodoList();
        } else if ($pilihan == "2") {
            // view hapus todo
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            // exit
            break;
        } else {
            echo "pilihan tidak dimengerti" . PHP_EOL;
        }
    }
    echo "See you next time :)";
}