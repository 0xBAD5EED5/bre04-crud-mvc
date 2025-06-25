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
