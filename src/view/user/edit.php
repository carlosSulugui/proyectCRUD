<section class="container">
    <h1>Editar Empleado</h1>
    <form action="?controller=User&method=update&id=<?= $user->id ?>" method="POST">
        <section>
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" required value="<?= $user->name ?>">
        </section>
        <section>
            <label for="last_name">Apellidos</label>
            <input type="text" name="last_name" id="last_name" required value="<?= $user->last_name ?>">
        </section>
        <section>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required value="<?= $user->email ?>">
        </section>
        <section>
            <label for="email">Email</label>
            <input type="text" name="status" id="status" required value="<?= $user->status ?>">
        </section>
                <section >
                    <input type="submit" value="Actualizar">
                    <a href="?controller=User" >Volver</a>
                </section>
    </form>
</section>
