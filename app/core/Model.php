<?php

namespace App\Core;

use App\core\Database;

abstract class Model {
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }
}

?>