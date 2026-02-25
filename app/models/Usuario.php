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

    public function createUser($name) {
        $sql = 'INSERT INTO usuarios (nome) VALUES (:nome)';
        $params = ['nome' => $name];
        return $this->db->execute($sql, $params);
    }

    public function getAllUsers() {
        return $this->db->fetchAll('SELECT * FROM usuarios');
    }

    public function getUsersById($id) {
        $sql = 'SELECT * FROM usuarios WHERE id = :id';
        $params = ['id' => $id];
        return $this->db->fetch($sql, $params);
    }
    
    public function getUsersCount() {
        return $this->db->fetch('SELECT COUNT(*) as count FROM usuarios')['count'];
    }
}

?>