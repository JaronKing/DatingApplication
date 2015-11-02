<?php

namespace Dating\MainBundle\Controller;


class ProfileController extends Dating\AdminBundle\Controller\ProfileController
{
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('DatingAdminBundle:Profile')->findOneBy( array( '' => $user));
        return $this->render('DatingMainBundle:Profile:index.html.twig', array(

        ));
    }

    public function showAction()
    {

        return $this->render('DatingMainBundle:Profile:show.html.twig', array(
                // ...
            ));
    }

    public function editAction()
    {
        return $this->render('DatingMainBundle:Profile:edit.html.twig', array(// ...
        ));
    }

    public function createAction(Request $request)
    {

        return $this->render('DatingMainBundle:Profile:create.html.twig', array(

        ));
    }

}
