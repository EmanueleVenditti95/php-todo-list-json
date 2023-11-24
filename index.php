<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>    
</head>
<body>
   <div id="app">
    <h1>To Do List :</h1>

    <ul>
        <li v-for="toDo,i in toDos" :key="i" >
            {{ toDo }}
        </li>
    </ul>

   </div>
<script src="./app.js"></script>    
</body>
</html>