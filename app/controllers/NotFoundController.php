<?php
require_once __DIR__ . '/../core/Controller.php';

class NotFoundController extends Controller {
    public function index() {
        // retorna o status 404
        http_response_code(404);

        $this->view('404/index');
    }
}

?>