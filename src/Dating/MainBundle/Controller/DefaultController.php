<?php

namespace Dating\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DatingMainBundle:Default:index.html.twig');
    }
}
