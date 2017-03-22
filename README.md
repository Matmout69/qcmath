# QCM de début de cours de math
Réalisé dans le cadre du projet tuteuré - IUT Lyon 1

## Pour contribuer
(À adapter en fonction de votre configuration)
- Installer composer : https://getcomposer.org/doc/00-intro.md (si droits insuffisants, installer en local)
- (Si sur Windows avec droit insuffisants) récupérer une version de php sans installation : http://windows.php.net/download
- Installer les dépendances : `php composer.phar install -d "(chemin vers dossier qcmath local)`
- Lancer un serveur local de test avec php : `$ php -S localhost:8000` (http://php.net/manual/fr/features.commandline.webserver.php)

## Organisation du code
- `/model`, `/view` et `controller` : Motif MVC (réservé pour le code en "contact direct" avec l'utilisateur, ie. les pages affichées)
- `/lib` : code réutilisable par l'ensemble de l'application

## Qualité de code
- Ce projet suit autant que possible les PSR, à l'aide de PHP_CodeSniffer

## Outils / Bibliothèques externes
- PHP 7
- (Gestionnaire de dépendances) Composer <https://getcomposer.org>
- (Authentification) Sentinel <https://cartalyst.com/manual/sentinel/2.0> 
- (Gestion des routes) FastRoute <https://github.com/nikic/FastRoute>
- (Qualité de code) CodeSniffer <https://github.com/squizlabs/PHP_CodeSniffer>
