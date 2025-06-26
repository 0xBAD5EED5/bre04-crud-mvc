<?php
class UserController {

    public function show() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $manager = new UserManager();
        $users = $manager->findOne($id);
    
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
        $user = new User($email, $first_name, $last_name);
    
        // 2. Instancier le manager et transmettre l'utilisateur
        $manager = new UserManager();
        $manager->create($user);
    
        // 3. Rediriger vers la liste des utilisateurs
        $route = "list";
        require 'templates/layout.phtml';
    }
    
    public function update() {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $manager = new UserManager();
        $user = $manager->findOne($id);
    
        $route = "update";
        require 'templates/layout.phtml';
    }
    
    public function checkUpdate() {
        $id = $_POST['id'];
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
    
        $user = new User($email, $first_name, $last_name, $id);
        $manager = new UserManager();
        $manager->update($user);
        $route = "list";
        require 'templates/layout.phtml';
    }
    
    public function delete() {
        
    }

    public function list() {
        $manager = new UserManager();
        $users = $manager->findAll();
        
        $route = "list";
        require 'templates/layout.phtml';
    }
}
