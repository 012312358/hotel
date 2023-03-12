<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etablissement;
use Doctrine\ORM\EntityManagerInterface;

class EtablissementController extends AbstractController
{
	#[Route('/etablissement', name: 'app_etablissement')]
    public function listeEtablissements(EntityManagerInterface $entityManagerInterface): Response
    {
        $repoEtablissement = $entityManagerInterface->getRepository(Etablissement::class);
        $etablissements = $repoEtablissement->findAll();
        return $this->render('etablissement/index.html.twig', [
           'etablissement' => $etablissements
        ]);
    } 

}
