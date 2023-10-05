<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Entity\Livre;
use App\Repository\LivreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BibliothequeController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(LivreRepository $livreRepository): Response
    {
        $livres = $livreRepository->findAll();

        return $this->render('bibliotheque/index.html.twig', [
            'livres' => $livres,
        ]);
    }

    #[Route('/livre/{id}', name: 'livre_details')]
    public function livreDetails(Livre $livre): Response
    {
        return $this->render('bibliotheque/livreDetail.html.twig', [
            'livre' => $livre,
        ]);
    }

    #[Route('/auteur/{id}', name: 'auteur_details')]
    public function auteurDetails(Auteur $auteur): Response
    {
        return $this->render('bibliotheque/auteurDetail.html.twig', [
            'auteur' => $auteur,
        ]);
    }
}
