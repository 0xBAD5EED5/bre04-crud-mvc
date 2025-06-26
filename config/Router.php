<?php
class Router {

    public function handleRequest($get) {
        $controller = new UserController();
        $route = isset($get['route']) ? $get['route'] : null;
    
        if ($route === 'show_user') {
            $controller->show();
        } elseif ($route === 'create_user') {
            $controller->create(); 
        } elseif ($route === 'check_create_user') {
            $controller->checkCreate(); 
        } elseif ($route === 'update_user') {
            $controller->update();
        } elseif ($route === 'check_update_user') {
            $controller->checkUpdate();
        } elseif ($route === 'delete_user') {
            $controller->delete();
        } else {
            $controller->list();
        }
    }
}
