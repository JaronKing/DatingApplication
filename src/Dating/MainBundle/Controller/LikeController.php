<?php

namespace Dating\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LikeController extends Controller
{
    public function indexAction()
    {
        return $this->render('DatingMainBundle:Like:index.html.twig', array(
                // ...
            ));    }

    public function likeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $thisId = $this->getUser()->getId();

        $user = $em->getRepository('DatingUserBundle:User')->findOneBy( array( 'id' => $thisId ) );

        $likes = array();
        foreach($user->getMyLikes() as $key => $value){
            $likes[$value->getId()] = $value->getId();
        }

        if (array_search($id, $likes)) {
            $personLiked = $em->getRepository('DatingUserBundle:User')->findOneBy(array('id' => $id));
            $user->removeLike($personLiked);
            $personLiked->removeMyLike($user);
            $em->persist($user);
            $em->persist($personLiked);
            $em->flush();
        } else {
            $personLiked = $em->getRepository('DatingUserBundle:User')->findOneBy( array( 'id' => $id ) );
            $user->addLike($personLiked);
            $personLiked->addMyLike($user);
            $em->persist($user);
            $em->persist($personLiked);
            $em->flush();
        }
        return $this->redirect($request->server->get('HTTP_REFERER'));
    }
}
