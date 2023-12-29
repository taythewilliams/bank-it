<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function homepage()
    {
        return $this->render('home.html.twig', []);
    }

    public function rules()
    {
        return $this->render('rules.html.twig', []);
    }
}