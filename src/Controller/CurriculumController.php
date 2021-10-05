<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CurriculumController extends AbstractController
{
    /**
     * @Route("/", name="curriculum")
     */
    public function index(): Response
    {
        return $this->render('curriculum/index.html.twig', [
            'controller_name' => 'CurriculumController',
        ]);
    }
}
