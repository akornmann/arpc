<?php

namespace ARPCCoreBundle\Controller;

use ARPCCoreBundle\Entity\TeamEvent;
use ARPCCoreBundle\Form\TeamEventType;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class EventController extends Controller
{
    public function addTeamEventAction(Request $request)
    {
        $teamEvent = new TeamEvent();

        $form = $this->createForm(TeamEventType::class, $teamEvent);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($teamEvent);
            $em->flush();

            return $this->redirectToRoute('club_show_events');
        }
        
        return $this->render('ARPCCoreBundle:Event:add-team.html.twig', array(
            'form' => $form->createView(),));        
    }
    
    public function addMatchAction($teamId, Request $request)
    {
        $teamEvent = new TeamEvent();

        $form = $this->createForm(TeamEventType::class, $teamEvent);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $teamEvent->setName("Match");
            $teamEvent->setLocation("Somewhere");
            $teamEvent->setDescription("Something");
            
            $teamRepository = $this->getDoctrine()->getRepository('ARPCCoreBundle:Team');
            $team = $teamRepository->find($teamId);
            $team->addTeamEvent($teamEvent);
            $teamEvent->setClub($team->getClub());
            
            
            $em = $this->getDoctrine()->getManager();

            $em->persist($teamEvent);
            $em->persist($team);
            $em->flush();

            return $this->redirectToRoute('club_show_events');
        }
        
        return $this->render('ARPCCoreBundle:Event:add-team.html.twig', array(
            'form' => $form->createView(),));        
    }
}
