<?php

use Andre\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->getConnection();
