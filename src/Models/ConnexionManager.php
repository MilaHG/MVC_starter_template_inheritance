<?php

namespace  App\Models;

use PDO;

class ConnexionManager
{
    /** Connection PDO **/
    protected PDO $connexion;

    public function __construct()
    {
        $this->connexion = ConnexionPDO::getPdo();
    }
}