<?php

namespace Dating\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $profiles = $em->getRepository('DatingAdminBundle:Profile')->findAll(
            array(),
            array( 'dateCreated' => 'DESC'),
            10, 10
        );

        return $this->render('DatingMainBundle:Default:index.html.twig', array(
            'profiles' => $profiles
        ));
    }
}
