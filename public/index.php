<?php

/**
 * Chargement des dépendances
 */
require_once "../config.php";
require_once "../model/theSectionModel.php";
<<<<<<< HEAD
=======
require_once "../model/theArticleModel.php";

>>>>>>> 783d5868d9f5cce3d86b32d2b7f99fd166d3cea8

/**
 * Connexion PDO
 */
try {
    $db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';port=' . DB_PORT . ';charset=' . DB_CHARSET, DB_LOGIN, DB_PWD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Code erreur : " . $e->getCode();
    echo "<br>Message d'erreur : " . $e->getMessage();
}

$test = thearticleSelectAll($db);

// var_dump($test);

var_dump (theSectionSelectAllNav($db));

/**
 * Routeur
 */


/**
 * Nous ne sommes pas connectés
 */

require_once "../controller/publicThearticleController.php";

//chargement Model


