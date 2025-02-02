<?php

function snippet(string $name):void{
    include "./snippets/{$name}.php";
}

function whoops():void{
    include './vendor/autoload.php';
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}
?>