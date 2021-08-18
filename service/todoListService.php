<?php

namespace service {

    use entity\todoList;
    use repository\todoListRepository;

    interface todoListService
    {

        function showTodoList();

        function addTodoList(string $todo);

        function removeTodoList(int $number);
    }

    class todoListServiceImpl implements todoListService
    {

        private todoListRepository $todoListRepository;

        public function __construct(todoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        public function showTodoList()
        {

            echo "TODOLIST" . PHP_EOL;
            $TodoList = $this->todoListRepository->findAll();
            foreach ($TodoList as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        public function addTodoList(string $todo)
        {
            $TodoList = new todoList($todo);
            $this->todoListRepository->save($TodoList);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        public function removeTodoList(int $number)
        {
            if ($this->todoListRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MEGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}