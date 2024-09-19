<?php

namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $db;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }

    public function getAll()
    {
        try {
            $query = "SELECT users.*, roles.name AS role, roles.value FROM users LEFT JOIN roles ON users.role_id = roles.id";
            $statement = $this->db->query($query);
            return $statement->fetchAll();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function insert($data)
    {
        try {
            $query = "INSERT INTO users (name, email, phone, address, password, role_id, created_at) VALUES (:name, :email, :phone, :address, :password, :role_id, NOW())";
            $statement = $this->db->prepare($query);
            $statement->execute($data);
            return $this->db->lastInsertId();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function check($email, $password)
    {
        try {
            $query = "SELECT * FROM users WHERE email=:email AND password=:password";
            $statement = $this->db->prepare($query);
            $statement->execute([
                'email' => $email,
                'password' => $password,
            ]);
            return $statement->fetch();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function uploadPhoto($name, $id)
    {
        try {
            $query = "UPDATE users SET photo=:photo WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute([
                'photo' => $name,
                'id' => $id,
            ]);
            return $statement->rowCount();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function updateRole($id, $role)
    {
        try {
            $query = "UPDATE users SET role_id=:role_id WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute([
                'role_id' => $role,
                'id' => $id,
            ]);
            return $statement->rowCount();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function suspend($id)
    {
        try {
            $query = "UPDATE users SET suspended=1 WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute([
                'id' => $id,
            ]);
            return $statement->rowCount();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function unsuspend($id)
    {
        try {
            $query = "UPDATE users SET suspended=0 WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute([
                'id' => $id,
            ]);
            return $statement->rowCount();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }

    public function delete($id)
    {
        try {
            $query = "DELETE FROM users WHERE id=:id";
            $statement = $this->db->prepare($query);
            $statement->execute([
                'id' => $id,
            ]);
            return $statement->rowCount();
        } catch (PDOException $e) {
            return $e->getMessage();
            exit();
        }
    }
}
