<section class="container">
    <h1>Editar Empleado</h1>
    <form action="?controller=User&method=update&id=<?= $user->id ?>" method="POST">
        <section>
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" required value="<?= $user->name ?>">
        </section>
        <section>
            <label for="status">Estado</label>
            <input class="form-control" type="text" name="status" id="status" required value="<?= $user->status ?>">
        </section>
                <section >
                    <input class="btn btn-success" class="form-control" type="submit" value="Actualizar">
                    <a class="btn btn-light" href="?controller=User" >Volver</a>
                </section>
    </form>
</section>
