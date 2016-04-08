<?php

/**
 * example-bootstrap.php
 *
 * Instructions:
 *
 * 1) Change $paths to the directory or directories where your entity
 * files are stored.
 *
 * 2) Add your own database credentials into $dbParams. This example
 * is for MySQL with PDO drivers.
 *
 *
 * 3) Rename file to bootstrap.php
 */


require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("/path/to/entity-files");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'foo',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

?>