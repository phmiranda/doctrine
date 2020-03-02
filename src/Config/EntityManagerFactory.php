<?php

namespace Alura\Doctrine\Config;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\ORMException;

class EntityManagerFactory {
    /**
     * @return EntityManagerInterface
     * @throws ORMException
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
