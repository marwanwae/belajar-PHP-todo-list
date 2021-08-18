<?php

namespace repository {


    use entity\todoList;

    interface todoListRepository
    {
        function save(todoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class todoListRepositoryImpl implements todoListRepository
    {
        public array $todoList = array();

        public function save(todoList $todoList): void
        {
            $number = sizeof($this->todoList) + 1;
            $this->todoList[$number] = $todoList;
        }

        public function remove(int $number): bool
        {
            if ($number > sizeof($this->todoList)) {
                return false;
            }
            for ($i = $number; $i < sizeof($this->todoList); $i++) {
                $this->todoList[$i] = $this->todoList[$i + 1];
            }
            unset($this->todoList[sizeof($this->todoList)]);
            return true;
        }

        public function findAll(): array
        {
            return $this->todoList;
        }
    }
}