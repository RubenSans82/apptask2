<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">
</head>

<body>
    <h1>Task List</h1>
    <table class="task_list">
        <tr>
            <th>Task ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Create Date</th>
            <th>Action</th>
        </tr>
        <?php
        foreach ($data as $task) {
            echo "<tr>";
            echo "<td>$task->task_id</td>";
            echo "<td>$task->title</td>";
            echo "<td>$task->description</td>";
            echo "<td>$task->create_date</td>";
            echo "<td><a href='/apptask2/task/edit/$task->task_id'>Edit</a> <a href='/apptask2/task/delete/$task->task_id'>Delete</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <a href="/apptask2/task/new" id="newTask">New Task</a>

    <script>
        const newTask = document.getElementById('newTask');
        newTask.addEventListener('mouseover', () => {
            newTask.style.setProperty('--random1', Math.random());
            newTask.style.setProperty('--random2', Math.random());
        });
    </script>
</body>

</html>