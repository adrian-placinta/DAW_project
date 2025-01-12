<?php


include_once ('model/User.php');
include_once('config/db.php');
include_once ('repository/UserRepository.php');
include_once ('controller/UserController.php');

// Create the "repository" object
$users = new UserRepository($pdo);

// Create the "controller"
$userController = new UserController($users);

// Simple router
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        // Default route - display something simple or redirect to another action
        include_once('./views/welcome.php');
        break;

    case '/home':
        include_once('./views/home/home.php');
        break;

    case '/curse':
        include_once('./views/curse/curse.php');
        break;

    case '/register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // If it's a POST request, handle the registration
            $view = $userController->register($_POST['name'], $_POST['email'], $_POST['password']);
            // Include the view returned from the controller
            include_once($view);
        } else {
            // Show the registration form if GET request
            include_once('./views/register/register.php');
        }
        break;

    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // If it's a POST request, handle the login
            $view = $userController->login($_POST['email'], $_POST['password']);
            // Include the view returned from the controller
            include_once($view);
        } else {
            // Show the login form if GET request
            include_once('./views/login/login.php');
        }
        break;

    default:
        echo 'Page not found.';
        break;
}
?>
