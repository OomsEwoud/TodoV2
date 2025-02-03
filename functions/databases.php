<?php

function dbConnect(string $user, string $pass, string $db, string $host = "127.0.0.1" ):PDO
{
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        return $pdo;
    }
    catch (PDOException $e) {
        echo "Error connecting to database: " . $e->getMessage();
    }
}

function showTasks(PDO $db):void
{
    $tasks = $db->query("SELECT * FROM todos")->fetchAll();
}

function addTask(string $task, PDO $db):void
{
    $task = htmlspecialchars($_POST['todo']);
    $statement = $db->prepare("INSERT INTO todos (text) VALUES (:task)");
    $statement->bindparam(':task', $task);
    $statement->execute();
}

function deleteTask(string $task,PDO $db):void
{
}

function get(string $name):mixed
{
    if(!empty($_POST[$name]))
    {
        return $_POST[$name];
    }

    if(!empty($_GET[$name]))
    {
        return $_GET[$name];
    }

    return null;
}
?>