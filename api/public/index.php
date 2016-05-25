<?php


// Affichage des erreurs PHP
error_reporting(E_ALL);
ini_set("display_errors", 1);

define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/..'));

require APPLICATION_PATH . '/lib/autoload.php';
require APPLICATION_PATH . '/config.php';

//Démarrage de la session en PHP
session_start();

// Initialisation du Router afin de capter les URLs disponibles
$router = new Router();

// Page d'accueil
$router->addRoute(array(
    'route'  => '^/$',
    'GET'   => array('IndexController', 'index') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin$',
    'GET'   => array('AdminController', 'index') // Classe IndexController, Méthode index
));

// Films 

$router->addRoute(array(
    'route'  => '^/admin/films$',
    'GET'   => array('AdminFilmController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/films/add$',
    'ALL'   => array('AdminFilmController', 'add') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/films/update$',
    'ALL'   => array('AdminFilmController', 'update') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/films/delete$',
    'ALL'   => array('AdminFilmController', 'delete') // Classe IndexController, Méthode index
));

// Youtubers

$router->addRoute(array(
    'route'  => '^/admin/youtubers$',
    'GET'   => array('AdminYoutuberController', 'index') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/youtubers/add$',
    'ALL'   => array('AdminYoutuberController', 'add') // Classe IndexController, Méthode index
));


$router->addRoute(array(
    'route'  => '^/admin/youtubers/update$',
    'ALL'   => array('AdminYoutuberController', 'update') // Classe IndexController, Méthode index
));

$router->addRoute(array(
    'route'  => '^/admin/youtubers/delete$',
    'ALL'   => array('AdminYoutuberController', 'delete') // Classe IndexController, Méthode index
));

// Authentification des membres
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'GET'   => array('AdminController', 'login') // Classe MembreController, Méthode login
));

// Authentification des membres - envoie des données en POST
$router->addRoute(array(
    'route'  => '^/admin/login$',
    'POST'   => array('AdminController', 'loginPost') // Classe MembreController, Méthode loginPost
));

// Déconnexion de l'espace membre
$router->addRoute(array(
    'route'  => '^/admin/logout$',
    'GET'   => array('AdminController', 'logout')
));

$router->run();