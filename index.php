<?php

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body class="bg-dark">
    <div id="my-app">

        <header class="text-center text-white my-5">
            <h1>To do list</h1>
        </header>
    
        <!-- /* ************************************************************************ */ -->
    
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <div class="card p-5">
                            <form class="input-group" @submit.prevent="addTask">
                                <input type="text" class="form-control" placeholder="Inserisci una nuova task" v-model="newTask.description">
                                <button class="btn btn-primary">Crea</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="card">
                            <div class="card p-3" v-for="(element, i) in tasksList">
                                <h3 :class="(element.isDone === 'true') ? 'text-decoration-line-through' : ''" @click="onTaskClick(element)" >{{element.description}}</h3>
                                <button class="btn btn-danger ms-auto" @click="deleteTask(i)">Elimina</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <script type="module" src="js/main.js"></script>
</body>

</html>