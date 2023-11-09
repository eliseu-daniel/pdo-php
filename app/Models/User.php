<?php

namespace App\Models;

use mysqli;
use PDO;

class User extends Model
{
    //Buscar os dados do BD e colocar no table
    public function all()
    {
        $sql = 'SELECT * FROM users';
        return $this->query($sql);
    }

    //Criar os dados no banco de dados
    public function create(array $data): void
    {
        $sql = "INSERT INTO users (name, email) VALUES ('{$data['nome']}', '{$data['email']}')";
        $this->query($sql);
    }

    public function show($id)
    {

        $sql = "SELECT * FROM users WHERE id = $id";
        return $this->query($sql);

    }

    public function update1($id, array $data) : void
    {

        $gravar = "UPDATE users SET name= '{$data['nome']}', email='{$data['emailn']}' where id = $id ";
        $this->query($gravar);  

    }

    public function destroy($id) : void
    {
     
        $sql = ("DELETE FROM users WHERE id = $id");
        $this->query($sql);
       
    }
}