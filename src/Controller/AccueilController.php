<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil', name: 'app_accueil')]
    public function index(FormationRepository $formationsRepository): Response
    {
        $formas = $formationsRepository->findBy([],['duree' => 'DESC']);
        return $this->render('accueil/index.html.twig', [
            'formas' => $formas
        ]);
    }
}
