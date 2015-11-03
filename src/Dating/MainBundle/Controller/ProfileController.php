<?php

namespace Dating\MainBundle\Controller;


use Dating\AdminBundle\Entity\Profile;
use Dating\AdminBundle\Form\ProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('DatingAdminBundle:Profile')->findOneBy( array( 'createdBy' => $user));
        if (!$profile) {
            return $this->redirect($this->generateUrl('main_profile_create'));
        } else {
            return $this->redirect($this->generateUrl('main_profile_show', array('id' => $profile->getId() )));
        }
    }

    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('DatingAdminBundle:Profile')->findOneBy( array( 'id' => $this->getUser() ));
        return $this->render('DatingMainBundle:Profile:show.html.twig', array(
            'profile' => $profile
        ));
    }

    public function editAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $profile = $em->getRepository('DatingAdminBundle:Profile')->findOneBy( array('id' => $this->getUser() ));
        $form = $this->createCreateForm($profile);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $profile->setCreatedBy($this->getUser());
            $profile->setDateCreated(new \DateTime('now'));
            $em->persist($profile);
            $em->flush();

            return $this->redirect($this->generateUrl('main_profile_show', array('id' => $profile->getId())));
        }
        return $this->render('DatingMainBundle:Profile:edit.html.twig', array(
            'profile' => $profile,
            'form' => $form->createView()
        ));
    }

    public function createAction(Request $request)
    {
        $profile = new Profile();
        $form = $this->createCreateForm($profile);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $profile->setCreatedBy($this->getUser());
            $profile->setDateCreated(new \DateTime('now'));
            $em->persist($profile);
            $em->flush();

            return $this->redirect($this->generateUrl('main_profile_show', array('id' => $profile->getId())));
        }

        return $this->render('DatingMainBundle:Profile:create.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function createCreateForm(Profile $entity)
    {
        $form = $this->createForm(new ProfileType(), $entity, array(
            'action' => $this->generateUrl('main_profile_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

}
