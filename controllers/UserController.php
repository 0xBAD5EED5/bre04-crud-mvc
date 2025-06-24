<?php
class PageController {

    public function home() {
        $route = "home";
        require 'templates/layout.phtml';
    }

    public function about() {
        $route = "about";
        require 'templates/layout.phtml';
    }

    public function contact() {
        $route = "contact";
        require 'templates/layout.phtml';
    }

    public function category($categorie) {
        $route = "category";
        if ($categorie === 'dev-back') {
            $categoryTitle = "Développement Back-end";
            $categoryText = "Ici, tu trouves les articles dédiés au développement Back-end: PHP, SQL, API...";
        } elseif ($categorie === 'dev-front') {
            $categoryTitle = "Développement Front-end";
            $categoryText = "Ici, tu trouves les articles dédiés au développement Front-end: HTML, CSS, JavaScript...";
        } else {
            $categoryTitle = "Catégorie inconnue";
            $categoryText = "Cette catégorie n'existe pas.";
        }
        require 'templates/layout.phtml';
    }


    public function article($articleName) {
        $route = "article";
        if ($articleName === 'i-love-php') {
            $articleTitle = "I love PHP";
            $articleContent = "PHP, c'est la base du développement web dynamique côté serveur. Cet article explique pourquoi PHP est populaire.";
        } elseif ($articleName === 'i-love-js') {
            $articleTitle = "I love JS";
            $articleContent = "JavaScript est le langage du navigateur: il rend le web interactif et dynamique. Découvre pourquoi JS est incontournable!";
        } else {
            $articleTitle = "Article inconnu";
            $articleContent = "Cet article n'existe pas.";
        }
        require 'templates/layout.phtml';
    }


    public function notFound() {
        $route = "notFound";
        require 'templates/layout.phtml';
    }
}
