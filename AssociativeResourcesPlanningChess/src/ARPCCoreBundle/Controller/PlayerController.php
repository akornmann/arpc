<?php

namespace ARPCCoreBundle\Controller;

use ARPCCoreBundle\Entity\Player;
use ARPCCoreBundle\Form\PlayerType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    public function addAction(Request $request)
    {
        $player = new Player();

        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($player);
            $em->flush();

            return $this->redirectToRoute('club_show_player_list');
        }
        
        return $this->render('ARPCCoreBundle:Player:add.html.twig', array(
            'form' => $form->createView(),));
    }
    
    public function editAction($id, Request $request)
    {
        $player = $this->getDoctrine()->getRepository('ARPCCoreBundle:Player')->find($id);

        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($player);
            $em->flush();

            return $this->redirectToRoute('club_show_player_list');
        }
        
        return $this->render('ARPCCoreBundle:Player:add.html.twig', array(
            'form' => $form->createView(),));
    }
    
    public function showAction($id)
    {
        $player = $this->getDoctrine()->getRepository('ARPCCoreBundle:Player')->find($id);
        
        if(!$player)
        {
            throw $this->createNotFoundException('No player found for id '.$id);
        }
        
        $players = array($player);
        
        return $this->render('ARPCCoreBundle:Player:list.html.twig', array(
            'players' => $players,));
    }
    
    public function showAllAction()
    {
        $players =$this->getDoctrine()->getRepository('ARPCCoreBundle:Player')->findAll();
        
        return $this->render('ARPCCoreBundle:Player:list.html.twig', array(
            'players' => $players,));
    }
    
    public function importAction()
    {
        //$importer = $this->get('arpc.environnement');
        
        $importer = $this->get('arpc.player_csv_import');
        $importer->import('test.csv');
        
        $players =$this->getDoctrine()->getRepository('ARPCCoreBundle:Player')->findAll();
        return $this->render('ARPCCoreBundle:Player:list.html.twig', array(
             'players' => $players,)); 
    }
}
