<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/todo.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <title>Let' Study</title>
</head>
<body>
    <?php
        include_once('header.php');
    ?>
    <!-- <fieldset>
        <legend class="main_title"><h1>To-Do List</h1></legend>
            
    </fieldset> -->
    <form class="js-toDoForm" action="todo_process.php" method="post">
        <input type="text" class="input-todo" placeholder="Write to do" />
        <ul class="toDoList">
            
        </ul>
    </form>
</body>
</html>