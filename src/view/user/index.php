<br>
<br>
<br>
<br>
<h1>Lista de Empleados</h1>
<a class="btn btn-success" href="?controller=User&method=create">
    Crear
</a>
<table class="table table-striped">
    <thead>
    <th>id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Status</th>
    <th>Acciones</th>
    </thead>
    <tbody>
    <?php foreach (parent::all() as $user): ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->last_name ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->status ?></td>
            <td width="200">
                <a class="btn btn-primary" href="?controller=User&method=edit&id=<?= $user->id ?>">
                    Editar
                </a>

                <a class="btn btn-danger" href="?controller=User&method=delete&id=<?= $user->id ?>">
                    Borrar
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

