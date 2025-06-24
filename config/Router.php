<?php
class Router {

    public function handleRequest($get) {
        $controller = new PageController();

        if (!isset($get['route'])) {
            $controller->home();
        } elseif ($get['route'] === 'a-propos') {
            $controller->about();
        } elseif ($get['route'] === 'contact') {
            $controller->contact();
        } elseif ($get['route'] === 'categorie' && isset($get['categorie'])) {
            $controller->category($get['categorie']);
        } elseif ($get['route'] === 'article' && isset($get['article'])) {
            $controller->article($get['article']);
        } else {
            $controller->notFound();
        }
    }
}
