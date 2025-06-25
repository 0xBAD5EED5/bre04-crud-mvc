<?php
class UserController {

    public function show() {
        $route = "show";
        require 'templates/layout.phtml';
    }

    public function create() {
        $route = "create";
        require 'templates/layout.phtml';
    }

    public function checkCreate() {
        // 1. Récupérer les données du formulaire (POST)
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
    
        // 1.2. Hydrater une instance de User
        require_once 'models/User.php';
        $user = new User($email, $first_name, $last_name);
    
        // 2. Instancier le manager et transmettre l'utilisateur
        require_once 'managers/UserManager.php';
        $manager = new UserManager();
        $manager->create($user);
    
        // 3. Rediriger vers la liste des utilisateurs
        header('Location: index.php?route=list');
        exit;
    }



    
    public function update() {
        $route = "update";
        require 'templates/layout.phtml';
    }
    
    public function checkUpdate() {
        
    }
    
    public function delete() {
        
    }


    public function list() {
        $route = "list";
        require 'templates/layout.phtml';
    }
    
}
