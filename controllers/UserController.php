<?php
require 'models/UserModel.php';
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function create($data) {

        $this->userModel->create($_POST);
        // Handle form submission for creating a new user
    }

    public function edit($id) {
//        var_dump($id);
      $fetch=$this->userModel->read($id);
      require "views/user/edit.php";
        // Handle form submission for updating an existing user

    }

    public function delete($id) {
        // Handle user deletion
        $this->userModel->delete($id);

    }

    public function index() {
        $users=$this->userModel->getAllUsers();
        require "views/user/view.php";
        // Retrieve all users from the UserModel and load the index view
    }

    public function update($id) {
      $this->userModel->update($id,$_POST);
//      require "views/user/edit.php";
        // Retrieve a specific user from the UserModel and load the view view
    }
}
