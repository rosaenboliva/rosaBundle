<?php

namespace rosa\ProyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('rosaProyBundle:Default:index.html.twig');
    }
}
