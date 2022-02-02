<?php

namespace Andre\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
  /**
   * Busca entidade
   * @return EntityManagerInterface
   */
  public function getEntityManager()
  {
    $rootDir = __DIR__ . '/../..';
    $config = Setup::createAnnotationMetadataConfiguration(
      [$rootDir . '/src'],
      isDevMode: true
    );
    $connection = [
      'driver' => 'pdo_sqlite',
      'path' => $rootDir . '/var/data/banco.sqlite'
    ];
    return EntityManager::create($connection, $config);
  }
}
