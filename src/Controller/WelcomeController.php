<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        if ($entityManager->getConnection()->connect()) {
            echo 'DOCTRINE WORKS';
        }
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
        ]);
    }

    /**
     * @Route("/", name="root")
     */
    public function root_index()
    {
        return $this->redirectToRoute('welcome');;
    }
}
