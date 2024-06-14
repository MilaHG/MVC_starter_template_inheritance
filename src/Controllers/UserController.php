<?php

namespace App\Controllers;

//use App\Models\ConnexionPDO;
use App\Models\ConnexionManager;
use App\Models\UserManager;
use App\Models\User;

// CETTE CLASSE REGROUPE TOUTES LES FONCTIONNALITES CONCERNANT UN OBJET DE TYPE User
class UserController
{
    // on déclare un attribut de type userManager
    private $userManager;

    // Méthode constructeur de la classe
    public function __construct()
    {
        // on instancie un objet de type userManager
        $this->userManager = new UserManager();
    }

    /** HomePage **/
    public function index(): void
    {
        $users = $this->userManager->findAllUsers();

        $nbRes = count($users);
        if ($nbRes >= 1) {
            $content = "<p>$nbRes magical user(s) found.</p>";
        } else {
            $content = "<p>No user found, sorry.</p>";
        }

        $content .= "<div class='container'>";


        foreach ($users as $username => $tasks) {

            $content .= "<article><div class='container'>";
            $content .= "<h3>{$username}</h3>"; // Accéder à la clé 'username' du tableau associatif

            $content .= "<ul>";
            foreach ($tasks as $task) {
                $content .= "<li>{$task}</li>"; // Accéder aux valeurs des tâches
            }

            $content .= "</ul>";

            $content .= "</article>";
        }
        $content .= "</div>";

        require VIEWS . 'Layout.php';
    }
}

