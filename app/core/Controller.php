<?php

class Controller {
    protected function view(string $view) {
        $viewFile = __DIR__ . '/../views/' . $view . '.php';

        if (!file_exists($viewFile)) {
            throw new Exception("View não existe: " . $viewFile);
        }
        require_once $viewFile;
    }
}

?>