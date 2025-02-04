<?php
include './functions/helpers.php';
include './functions/databases.php';
whoops();
$db = dbConnect('root', '', 'todov2');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
     if(get('todo')){
          addTask(get('todo'), $db);
     }

     if(get('check')){
          checkTask(get('id'), $db);
     }

     if(get('uncheck')){
          uncheckTask(get('id'), $db);
     }

     if(get('delete')){
          deleteTask(get('id'), $db);
     }
}

$todos = showTasks($db);
?>



<?php snippet('layout/header');?>
<div class="text-3xl text-center font-bold mb-3 uppercase">Todo List</div>
<?php snippet('todos/add-task');?>
<div class="bg-gray-100 mt-5 p-5 rounded-xl shadow-lg text-gray-700">
     <h1 class="font-bold text-xl italic block mb-0 leading-none">Todo's</h1>
     <small class="block mb-5 mt-0 text-xs text-gray-500"><?= getPendingCount($db); ?> Todos pending, <?= getCompletedCount($db); ?> Completed.</small>
     <?php snippet('todos/all-tasks', ['todos' => $todos]);?>
</div>
<?php snippet('layout/footer'); ?>