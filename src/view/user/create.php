<section class="container">
    <h1>Crear Empleado</h1>
    <form action="?controller=User&method=store" method="POST" enctype="multipart/form-data">
        <section >
            <label for="name">Nombre</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </section>
        <section >
            <label for="last_name">Apellidos</label>
            <input class="form-control" type="text" name="last_name" id="last_name" required>
        </section>
        <section >
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </section>
        <section >
            <label for="status">Status</label>
            <input class="form-control" type="text" name="status" id="status" required>
        </section>

        <section >
            <input class="btn btn-success" type="submit" value="Guardar">
            <a href="?controller=User" class="btn btn-light" >Volver</a>
        </section>
    </form>
</section>
