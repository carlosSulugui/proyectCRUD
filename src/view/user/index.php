<h1>Lista de Empleados</h1>

<a href="?controller=User&method=create">
    <button>Crear</button>
</a>
<table>
    <thead>
    <th>id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Status</th>
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
                <a href="?controller=User&method=edit&id=<?= $user->id ?>">
                    <button>Editar</button>
                </a>

                <a href="?controller=User&method=delete&id=<?= $user->id ?>">
                    <button>Borrar</button>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

