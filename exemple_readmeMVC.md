# ExamA2Tech4_2024

# Structure des fichiers :

```
MVC
    public/
        index.php
        style.css
        img/
    src/
        config/
            config.php
        Controllers/
            ModelController.php
        Models/
            Model.php
            ModelManager.php
        Views/
            404.php
            layout.php
            Page/
                index.php
        Router.php
        Route.php
        Helper.php
        Validator.php
    tests/
        ModelTest.php
```

## Etape 2 - Composer et l'autoloading

- Initialiser le dossier comme étant un projet composer

```
A faire si le fichier composer.json n'existe pas :
$ composer init
```

- Installer l'autoloader et crée les vendor

```shell
$ composer install
```

- Remplir le fichier composer avec la règle d'autoloading

```json
"autoload": {
    "psr-4": {
        "MVC\\": "src/"
    }
}
```

- Réinitialiser l'autoloader

```shell
composer dump-autoload
```

- Aller dans le dossier public

```
cd public
```

- lancer le projet

```
php -S localhost:8000
```

---

- lancer les tests unitaires

```
vendor\bin\phpunit ./tests
```
