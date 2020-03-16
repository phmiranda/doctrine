<?php
/**
 * User: phmiranda
 * Project: doctrine
 * Date: 16/03/2020
 * Time: 12:46
 */

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Config\EntityManagerFactory;

require_once __DIR__.'/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

/**
 * @var Aluno[] $alunolist
 */
$alunolist = $alunoRepository->findAll();
echo "------------LISTA DE ALUNOS------------".PHP_EOL;
foreach ($alunolist as $alunos){
    echo "Identificador: ".$alunos->getId().PHP_EOL;
    echo "Nome Completo: ".$alunos->getNome().PHP_EOL.PHP_EOL;
}
echo "------------FIM------------".PHP_EOL.PHP_EOL ;

echo "------------BUSCAR POR PARÂMETRO------------".PHP_EOL;
$alunoBuscaPorParamatro = $alunoRepository->find(2);
echo $alunoBuscaPorParamatro->getNome;
echo "------------FIM------------".PHP_EOL.PHP_EOL ;
