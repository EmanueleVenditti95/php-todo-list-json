<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
   <div id="app" class="container">
    <h1>To Do List :</h1>

    <input type="text" 
            placeholder="new task..."
            v-model="newToDo"
            @keyup.enter="sendToDo">

    <ul>
        <li v-for="toDo,i in toDos" :key="i" >
            <div :class=" toDo.done ? 'task-done' : '' "
            @click=taskToggle(i)>
            {{ toDo.text }}</div>
            <div>{{ toDo.done }}</div>
        </li>
    </ul>

   </div>
<script src="./app.js"></script>    
</body>
</html>