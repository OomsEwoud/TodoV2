<?php
include './functions/helpers.php';
include './functions/databases.php';
whoops();
$db = dbConnect('root', '', 'todov2');
?>
<?php snippet('layout/header');?>
<div class="text-3xl text-center font-bold mb-3 uppercase">Todo List</div>
<?php snippet('todos/add-task');?>
<div class="bg-gray-100 mt-5 p-5 rounded-xl shadow-lg text-gray-700">
     <h1 class="font-bold text-xl italic block mb-0 leading-none">Todo's</h1>
     <small class="block mb-5 mt-0 text-xs text-gray-500">0 Todos pending, 0 Completed.</small>
     <?php snippet('todos/all-tasks');?>
</div>
<?php snippet('layout/footer'); ?>