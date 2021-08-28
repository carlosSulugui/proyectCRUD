<?php

class UserController extends User
{
    public function __construct()
    {
    }

    public function index()
    {
        require_once 'src/view/layouts/header.php';
        require_once 'src/view/user/index.php';
        require_once 'src/view/layouts/footer.php';
    }

    public function create()
    {
        require_once 'src/view/layouts/header.php';
        require_once 'src/view/user/create.php';
        require_once 'src/view/layouts/footer.php';
    }

    public function store()
    {
        echo parent::register($_POST) ? header('location: ?controller=User') : 'Error en el registro';
    }

    public function edit()
    {
        $user = parent::find($_GET['id']);
        require_once 'src/view/layouts/header.php';
        require_once 'src/view/user/edit.php';
        require_once 'src/view/layouts/footer.php';
    }

    public function update()
    {
        $_POST['id'] = $_GET['id'];
        if (parent::update_register($_POST)) {
            header('location:?controller=User');
        } else {
            die('Error al actualizar');
        }
    }

    public function delete()
    {
        $_POST['id'] = $_GET['id'];
        if (parent::delete($_POST)) {
            header('location:?controller=User');
        } else {
            die('Error al actualizar');
        }
    }

}
