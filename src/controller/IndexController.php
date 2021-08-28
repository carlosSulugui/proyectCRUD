<?php


class IndexController
{

    public function __construct(){

    }

    public function index(){
        require_once 'src/view/index/index.php';
//        require_once 'src/view/layouts/header.php';
//        require_once 'src/view/user/index.php';
//        require_once 'src/view/layouts/footer.php';
    }

    public function create(){
        echo 'function create';
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }

}
