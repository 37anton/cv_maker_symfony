<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/my-infos', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', []);
    }
}
