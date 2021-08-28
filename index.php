<!--<!DOCTYPE html>-->
<!--<html lang="es">-->
<!--<head>-->
<!--    <title>Ejercicio</title>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>-->
<!--</head>-->
<!--<body>-->
<!--<div id="app">-->
<!--    <div>-->
<!--        <table>-->
<!--            <thead>-->
<!--            <th>id</th>-->
<!--            <th>Nombres</th>-->
<!--            <th>Apellidos</th>-->
<!--            <th>Email</th>-->
<!--            <th>Status</th>-->
<!--            </thead>-->
<!--            <tr v-for="data in all_data ">-->
<!--                <td>{{data.id}}</td>-->
<!--                <td>{{data.name}}</td>-->
<!--                <td>{{data.last_name}}</td>-->
<!--                <td>{{data.email}}</td>-->
<!--                <td>{{data.status}}</td>-->
<!--            </tr>-->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<script>-->
<!--    var app = new Vue({-->
<!--        el: "#app",-->
<!--        data: {-->
<!--            all_data: []-->
<!--        },-->
<!---->
<!--        created: function () {-->
<!--            console.log("Iniciando ...");-->
<!--            this.get_contacts();-->
<!--        },-->
<!---->
<!--        methods: {-->
<!--            get_contacts: function () {-->
<!--                fetch("./getData.php")-->
<!--                    .then(response => response.json())-->
<!--                    .then(json => {-->
<!--                        console.log(json);-->
<!--                        this.all_data = json.data;-->
<!--                    });-->
<!--            }-->
<!--        }-->
<!--    });-->
<!--</script>-->
<!--</body>-->
<!--</html>-->

<?php
session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'Index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

spl_autoload_register(function ($class) {
//    if(file_exists("src/controller/{$class}Controller.php")){
//        echo'exist conttroller';
//        require_once "src/controller/UserController.php";
//    }else if(file_exists("src/models/{$class}.php")){
//        echo('exist model');
//        require_once "src/models/User.php";
//    }else{
//        die('The file no exists.');
//    }
    require_once "src/controller/UserController.php";
    require_once "src/controller/IndexController.php";
    require_once "src/models/User.php";
    require_once "src/db/Connection.php";
});

$controller = "{$controller}Controller";
call_user_func([new $controller(), $method]);

echo(phpinfo());

