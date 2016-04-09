<?php

namespace ARPCCoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClubController extends Controller
{
    public function indexAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub();
        
        $repository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Club');
        $club = $repository->findClubByCode($clubCode);
        
        return $this->render('ARPCCoreBundle:Club:main.html.twig', array(
            'club' => $club));
    }
    
    public function teamsAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub();
        
        $repository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Team');
        $teams = $repository->findAllTeamsByClub($clubCode);
        
        return $this->render('ARPCCoreBundle:Team:list.html.twig', array(
            'teams' => $teams));        
    }
    
    public function eventsAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub();
        
        $repository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Event');
        $events = $repository->findAllEventsByClub($clubCode);
        
        return $this->render('ARPCCoreBundle:Event:list.html.twig', array(
            'events' => $events));
    }
    
    public function playersAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub();
        
        $repository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Player');
        $players = $repository->findAllPlayersByClub($clubCode);
        
        return $this->render('ARPCCoreBundle:Player:list.html.twig', array(
            'players' => $players));
    }
}
