<?php
/**
 * User: phmiranda
 * Project: doctrine
 * Date: 12/03/2020
 * Time: 17:10
 */

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Config\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome('Pedro Henrique');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$entityManager->persist($aluno);
$entityManager->flush();
