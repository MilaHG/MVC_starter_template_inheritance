# MVC_starter_template


##  Utilisation de l'héritage et gestion des erreurs

/!\ Principe de Responsabilité Unique (Single Responsibility Principle) : chaque classe ne s'occupe que d'une seule chose.
Le code est plus simple à : maintenir, tester, réutiliser, faire évoluer 

- ConnexionPDO.php

Se charge uniquement de la  création et de la gestion de la connexion à la base de données.

Utilise le **pattern Singleton** pour s'assurer qu'une seule connexion PDO est créée et utilisée.
La méthode getPdo retourne la connexion PDO, en la créant si elle n'existe pas encore.

Le bloc 'try ... catch' permet de gérer les  éventuelles erreurs lors de la  connection à la BDD. 

>  Le **pattern Singleton** est un modèle de conception qui restreint l'instanciation d'une classe à une seule instance. Cela peut être particulièrement utile pour la gestion de la connexion à une base de données, car cela garantit qu'il n'y a qu'une seule connexion active à la fois, économisant ainsi des ressources

- ConnexionManager.php

Fournit un point d'accès à la connexion PDO pour les classes qui en héritent ('extends').

- UserManager.php

Hérite de ConnexionManager, ce qui lui permet d'utiliser la connexion PDO fournie par ConnexionManager.
Ainsi, la méthode findAllUsers utilise $this->connexion pour interagir avec la BDD.