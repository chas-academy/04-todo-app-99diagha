<?php

use Todo\Controller;
use Todo\Database;
use Todo\TodoItem;

class TodoController extends Controller {
    
    public function get()
    {
        $todos = TodoItem::findAll();
        return $this->view('index', ['todos' => $todos]);
    }

    public function add()
    {
        $body = filter_body();
        $title = $body['title'];
        $result = TodoItem::createTodo($title);

        if ($result) {
            $this->redirect('/');
        }
    }

    public function update($urlParams)
    {
        $body = filter_body(); // gives you the body of the request (the "envelope" contents)
        $todoId = $urlParams['id']; // the id of the todo we're trying to update
        $title = $body['title'];
        $completed = isset($body['status']) ? true : false; // whether or not the todo has been checked or not

        $result = TodoItem::updateTodo($todoId, $title, $completed);

        if ($result) {
            $this->redirect('/');
        }
    }

    public function delete($urlParams)
    {

    }

    /**
     * OPTIONAL Bonus round!
     * 
     * The two methods below are optional, feel free to try and complete them
     * if you're aiming for a higher grade.
     */
    public function toggle()
    {
      // (OPTIONAL) TODO: This action should toggle all todos to completed, or not completed.
    }

    public function clear()
    {
      // (OPTIONAL) TODO: This action should remove all completed todos from the table.
    }

}
