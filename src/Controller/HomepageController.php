<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environnement as Templating;

class HomepageController
{
    /**
     * @Route("/homepage", name="homepage")
     */
    public function index(Request $request):Response
    {
        $response = new Response();
        $response->setContent("ok");
        return $response;
        // return $this->render('homepage/index.html.twig', [
        //     'controller_name' => 'HomepageController',
        // ]);
    }


}
