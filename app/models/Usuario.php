<?php

namespace App\Models;

use App\Core\Model;

class Usuario extends Model {
    public function getUserData() {
        // simulando dados de usuarios
        return [
            'nome' => 'Felipe Kauãn',
            'idade' => 20,
            'email' => 'felipe@gmail.com'
        ];
    }

    public function testeDb() {
        $sql = 'SELECT * FROM usuarios';
        $resultado = $this->db->query($sql);
        return $resultado->fetch();
    }
}

?>