<?php

namespace Todo;

class TodoItem extends Model
{
    const TABLENAME = 'todos'; // This is used by the abstract model, don't touch

    public static function createTodo($title)
    {
        try {
            $query = "INSERT INTO todos (title, created)
                      VALUES (:title, :created)";
            $date = date('Y-m-d H:i:s');

            static::$db->query($query);
            static::$db->bind(':title', $title);
            static::$db->bind(':created', $date);

            $result = static::$db->execute();

            if (!$result) {
                throw new \Exception("Error occured when trying to add todo.");
            }

            return $result;
        } catch (PDOException $err) {
            return $err->getMessage();
        }
    }
    public static function updateTodo($todoId, $title, $completed = null)
    {

    }

    public static function deleteTodo($todoId)
    {

    }
    
    // (Optional bonus methods below)
    // public static function toggleTodos($completed)
    // {
    //     // TODO: Implement me!
    //     // This is to toggle all todos either as completed or not completed
    // }

    // public static function clearCompletedTodos()
    // {
    //     // TODO: Implement me!
    //     // This is to delete all the completed todos from the database
    // }

}