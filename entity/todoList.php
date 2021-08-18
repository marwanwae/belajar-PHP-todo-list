<?php

namespace entity;

class todoList
{
    private string $todo;

    public function __construct(string $todo = "")
    {
        $this->todo = $todo;
    }
    public function getTodo()
    {
        return $this->todo;
    }

    public function setTodo(string $todo)
    {
        $this->todo = $todo;
    }
}