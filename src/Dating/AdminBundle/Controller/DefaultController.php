<?php

namespace Dating\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DatingAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
