<?php

function snippet(string $name, array $data = []):void
{
    if(!empty($data)){
        extract($data);
    }
    include "./snippets/{$name}.php";
}

function whoops():void
{
    include './vendor/autoload.php';
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}

function svg(string $name):string 
{
    return file_get_contents("./resources/svg/{$name}.svg");
}
?>