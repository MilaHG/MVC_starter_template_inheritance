<?php

namespace App\models;

use PDO;
use PDOException;
/**
 * Utilise le pattern Singleton pour s'assurer qu'une seule connexion PDO est créée et utilisée.
*  La méthode getPdo retourne la connexion PDO, en la créant si elle n'existe pas encore.
 */

class ConnexionPDO
{
    private static ?PDO $pdo = null;

    public static function getPdo(): PDO
    {
        if (self::$pdo === null) {

            try {
                self::$pdo = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD, [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
                ]);
            } catch (PDOException $e) {
                die('Database connection failed: ' . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
