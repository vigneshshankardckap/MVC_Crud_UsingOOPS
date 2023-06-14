<?php
require 'connection.php';
class UserModel extends DB {
    // Database connection and other necessary properties

    public function create($data) {
        $name = $data['username'];
        $email = $data['email'];
        $password = $data['password'];
        $this->db->query("INSERT INTO todo(name,email,pass)VALUES('$name','$email','$password')");
        header('location:index.php');
//        // Perform database insert operation using $data
    }

    public function read($id) {

        $statement = $this->db->prepare("select * from todo where id = '$id'");
        $statement->execute();
        $fetch=$statement->fetchAll(PDO::FETCH_OBJ);
        return $fetch;   
             // Perform database select operation based on $id
    }

    public function update($id, $data) {
        $name=$data['username'];
        $email=$data['email'];
        $password=$data['password'];
        $this->db->query("UPDATE todo SET name='$name',email='$email',pass='$password' where id=$id");
        header("location:index.php");
        // Perform database update operation based on $id and $data
    }

    public function delete($id) {
        $this->db->query("DELETE from todo where id =$id");
        // Perform database delete operation based on $id
        header("location:index.php");
    }
    public function getAllUsers() {
        $statement = $this->db->prepare("SELECT * FROM todo");
        $statement->execute();
        $fetch=$statement->fetchAll(PDO::FETCH_OBJ);
        return $fetch;
    }
}