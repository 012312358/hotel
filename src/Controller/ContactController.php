<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReservationType;

class ContactController extends AbstractController
{
	#[Route('/contact', name: 'contact')]
		public function contact(): Response
		{
			$form = $this->createForm(ReservationType::class);
			return $this->render('contact/index.html.twig', [
				'form' => $form->createView()
			]);
		}
}
