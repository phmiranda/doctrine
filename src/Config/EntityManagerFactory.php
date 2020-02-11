<?php

namespace Alura\Doctrine\Config;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory {
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager() : EntityManagerInterface {
        $rootDir = __DIR__.'/../..';
        $config = Setup::createAnnotationMetadataConfiguration($rootDir.'/src',true);
        $connection = [
            'dbname' => 'db_doctrine.sqlite',
            'path' => $rootDir.'/storage/db_doctrine.sqlite',
        ];
        return EntityManager::create($connection, $config);
    }
}
