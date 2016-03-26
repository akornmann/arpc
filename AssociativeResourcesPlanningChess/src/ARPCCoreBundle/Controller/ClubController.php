<?php

namespace ARPCCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClubController extends Controller
{
    public function indexAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub();
        $club = $this->getDoctrine()->getRepository('ARPCCoreBundle:Club')->findClubByCode($clubCode);
        
        
        return $this->render('ARPCCoreBundle:Club:main.html.twig', array(
            'club' => $club));
    }
}
