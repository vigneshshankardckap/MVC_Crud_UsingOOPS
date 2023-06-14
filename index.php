<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

if (isset($_POST['action'])) {
    $action = $_POST['action'];
    switch ($action) {
        case 'create':
            $controller->create($_POST);
            break;
        case 'edit':
            $controller->edit($_POST['id']);
            break;
        case 'delete':
            $controller->delete($_POST['id']);
            break;
        case 'update':
            $controller->update($_POST['update']);
            break;
        default:
            $controller->index();
            break;
    }

} else {
    $controller->index();
}

