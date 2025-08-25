
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link rel="stylesheet" type="text/css" href="sthome.css">
</head>
<body>

    <h1>Personal Task Manager</h1>
    <input type="text" id="taskInput" placeholder="Add a new task">
    <button onclick="addTask()">Add Task</button>

    <ul id="taskList"></ul>

    <script>
        function addTask() {
            const taskInput = document.getElementById('taskInput');
            const taskText = taskInput.value;
            if (taskText === '') return;

            const li = document.createElement('li');
            li.className = 'task';
            li.innerHTML = `${taskText} <button onclick="deleteTask(this)">Delete</button>`;
            document.getElementById('taskList').appendChild(li);
            taskInput.value = '';
        }

        function deleteTask(button) {
            const li = button.parentElement;
            li.remove();
        }
    </script>

</body>
</html>
