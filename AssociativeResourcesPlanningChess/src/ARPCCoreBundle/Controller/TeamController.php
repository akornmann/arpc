<?php

namespace ARPCCoreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller
{
    public function menuAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub();
        
        $repository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Team');
        $teams = $repository->findAllTeamsByClub($clubCode);
        
        return $this->render('ARPCCoreBundle:Team:menu.html.twig', array(
            'teams' => $teams));
    }
    
    public function indexAction($id)
    {
        $repository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Team');
        $team = $repository->find($id);
        
        return $this->render('ARPCCoreBundle:Team:main.html.twig', array(
            'team' => $team));
    }
}