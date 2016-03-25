<?php

namespace ARPCCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClubController extends Controller
{
    public function indexAction()
    {
        $clubs = $this->getDoctrine()->getRepository('ARPCCoreBundle:Club')->findAll();
        
        $club = $clubs[0];
                
        return $this->render('ARPCCoreBundle:Club:main.html.twig', array(
            'club' => $club));
    }
}
