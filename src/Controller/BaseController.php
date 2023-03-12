<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etablissement;
use App\Entity\Suite;
use Doctrine\ORM\EntityManagerInterface;

class BaseController extends AbstractController
{
    #[Route('/', name: 'app_base')]
	public function index(EntityManagerInterface $entityManagerInterface): Response
    {
        $repoEtablissement = $entityManagerInterface->getRepository(Etablissement::class);
        $etablissements = $repoEtablissement->findAll();
		
		$repoSuite = $entityManagerInterface->getRepository(Suite::class);
        $suites = $repoSuite->findAll();
        return $this->render('base/index.html.twig', [
            'etablissements' => $etablissements,
            'suites' => $suites
        ]);
    }
}
