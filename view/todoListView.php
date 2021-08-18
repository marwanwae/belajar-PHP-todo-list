<?php

namespace todoListView;

use service\todoListService;
use helper\inputHelper;

class todoListView
{

    private todoListService $todoListService;

    function __construct(todoListService $todoListService)
    {
        $this->todoListService = $todoListService;
    }

    public function showTodoList()
    {
        while (true) {
            $this->todoListService->showTodoList();

            echo "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "X. Exit" . PHP_EOL;

            $pilihan = inputHelper::input("Pilih");
            if ($pilihan == "1") {
                // view tambah todo
                $this->addTodoList();
            } else if ($pilihan == "2") {
                // view hapus todo
                $this->removeTodoList();
            } else if ($pilihan == "x") {
                // exit
                break;
            } else {
                echo "pilihan tidak dimengerti" . PHP_EOL;
            }
        }
        echo "See you next time :)";
    }

    public function addTodoList()
    {
        echo "ADD TODO" . PHP_EOL;

        $todo = inputHelper::input("Todo (x untuk batal) ");

        if ($todo == 'x') {
            // batal
            echo 'batal menamnah todo' . PHP_EOL;
        } else {
            $this->todoListService->addTodoList($todo);
        }
    }

    public function removeTodoList()
    {
        echo "Delete TODO" . PHP_EOL;

        $pilihan = inputHelper::input("Nomor (x untuk batal)");

        if ($pilihan == 'x') {
            // batal
            echo "batal menghapus Todo" . PHP_EOL;
        } else {
            // hapus
            $this->todoListService->removeTodoList($pilihan);
        }
    }
}