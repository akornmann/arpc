<?php

namespace ARPCCoreBundle\Controller;

use ARPCCoreBundle\Entity\Club;
use ARPCCoreBundle\Form\ClubType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClubController extends Controller
{
    //------- Actions -------//

    /**
     * Show currently log in player's club
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $club = $this->get('arpc.environnement')->getClub();

        return $this->viewClub($club);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $club = new Club();

        return $this->persistClub($club, $request);
    }

    public function teamsAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub()->getCode();

        $teams = $this->getDoctrine()->getRepository('ARPCCoreBundle:Team')->findAllTeamsByClub($clubCode);

        return $this->render('ARPCCoreBundle:Team:list.html.twig', array(
            'teams' => $teams));
    }

    public function eventsAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub()->getCode();

        $events = $this->getDoctrine()->getRepository('ARPCCoreBundle:Event')->findAllEventsByClub($clubCode);

        return $this->render('ARPCCoreBundle:Event:list.html.twig', array(
            'events' => $events));
    }

    public function playersAction()
    {
        $clubCode = $this->get('arpc.environnement')->getClub()->getCode();

        $players = $this->getDoctrine()->getRepository('ARPCCoreBundle:Player')->findAllPlayersByClub($clubCode);

        return $this->render('ARPCCoreBundle:Player:list.html.twig', array(
            'players' => $players));
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($code, Request $request)
    {
        $club = $this->getRepository()->findOneByCode($code);

        return $this->persistClub($club, $request);
    }

    /**
     * Show a club using id
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showIdAction($id)
    {
        $club = $this->getRepository()->find($id);

        return $this->viewClub($club);
    }

    /**
     * Show a club using code
     *
     * @param $code
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCodeAction($code)
    {
        $club = $this->getRepository()->findOneByCode($code);

        return $this->viewClub($club);
    }

    //------- Private -------//

    /**
     * Shortcut for Club repository
     *
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    private function getRepository()
    {
        return $this->getDoctrine()->getRepository('ARPCCoreBundle:Club');
    }

    /**
     * @param $club
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function viewClub($club)
    {
        if(!$club)
        {
            throw $this->createNotFoundException('Error while retrieving club');
        }

        return $this->render('ARPCCoreBundle:Club:main.html.twig',
            array('club' => $club));
    }

    /**
     * @param Club $club
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function persistClub(Club $club, Request $request)
    {
        $form = $this->createForm(ClubType::class, $club);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($club);
            $em->flush();

            return $this->viewClub($club);
        }

        return $this->render('ARPCCoreBundle:Club:add.html.twig', array(
            'form' => $form->createView()));
    }
}
