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

function showTasks(PDO $db): array
{
    $tasks = $db->query("SELECT * FROM todos")->fetchAll();

    return $tasks;
}

function addTask(string $task, PDO $db):void
{
    $statement = $db->prepare("INSERT INTO todos (text) VALUES (:task)");
    $statement->bindparam(':task', $task);
    $statement->execute();
}

function deleteTask(int $id,PDO $db):void
{
    //$date = date('Y-m-d H:i:s');
     //voor soft delete hier niet belangrijk $statement = $db->prepare("UPDATE todos SET deleted_at = :deleted_at WHERE id = :id");
     $statement = $db->prepare("DELETE FROM todos WHERE id = :id");
     $statement->bindParam(':id', $id);
    //$statement->bindParam(':deleted_at', $date);
    $statement->execute();
}

function get(string $name):mixed
{
    if(!empty($_POST[$name]))
    {
        return htmlspecialchars($_POST[$name]);
    }

    if(!empty($_GET[$name]))
    {
        return htmlspecialchars($_GET[$name]);
    }

    return null;
}
function getPendingCount(PDO $db):int
{
    $statement = $db->prepare("SELECT COUNT(*) FROM todos WHERE done = 0");
    $statement->execute();
    return $statement->fetchColumn();

}

function getCompletedCount(PDO $db):int
{
    $statement = $db->prepare("SELECT COUNT(*) FROM todos WHERE done = 1");
    $statement->execute();
    return $statement->fetchColumn();

}

function checkTask(int $id, PDO $db):void
{
    $statement = $db->prepare("UPDATE todos SET done = 1 WHERE id = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
}

function uncheckTask(int $id, PDO $db):void
{
    $statement = $db->prepare("UPDATE todos SET done = 0 WHERE id = :id");
    $statement->bindParam(':id', $id);
    $statement->execute();
}

?>