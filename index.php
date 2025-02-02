<?php
include './vendor/autoload.php';
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
include "./snippets/layout/header.php";
?>
<?php
include "./snippets/layout/footer.php";
?>