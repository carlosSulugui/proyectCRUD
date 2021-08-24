<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
</head>
<body>
<div id="app">
    <div>
        <table>
            <thead>
            <th>id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Email</th>
            <th>Status</th>
            </thead>
            <tr v-for="data in all_data ">
                <td>{{data.id}}</td>
                <td>{{data.name}}</td>
                <td>{{data.last_name}}</td>
                <td>{{data.email}}</td>
                <td>{{data.status}}</td>
            </tr>
    </div>
</div>

<script>
    var app = new Vue({
        el: "#app",
        data: {
            all_data: []
        },

        created: function () {
            console.log("Iniciando ...");
            this.get_contacts();
        },

        methods: {
            get_contacts: function () {
                fetch("./getData.php")
                    .then(response => response.json())
                    .then(json => {
                        console.log(json);
                        this.all_data = json.data;
                    });
            }
        }
    });
</script>
</body>
</html>
