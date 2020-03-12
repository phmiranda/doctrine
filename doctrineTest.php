<?php
/**
 * User: phmiranda
 * Project: doctrine
 * Date: 12/03/2020
 * Time: 15:19
 */


use Alura\Doctrine\Config\EntityManagerFactory;

// comentário.
require_once __DIR__. '/vendor/autoload.php';

// comentário.
$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

// comentário.
$data = $entityManager->getConnection();
var_dump($data);
