<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Models\Usuario;


class HomeController extends Controller {
    public function index() {
        $usuario = new Usuario();
        $data = $usuario->getUserData();
        
        $this->view('home/index', $data);
    }

    public function contact() {
        $this->view('home/contact');
    }
}

?>