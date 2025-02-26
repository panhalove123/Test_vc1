<?php
require_once "Router.php";
require_once "Controllers/BaseController.php";
require_once "Database/Database.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/LoginController.php";


$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

//users
$route->get("/users/user_list", [UserController::class, 'index']);

$route->get("/login", [LoginController::class, 'index']);

$route->route();