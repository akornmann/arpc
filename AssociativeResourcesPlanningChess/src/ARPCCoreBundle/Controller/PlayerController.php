<?php

namespace ARPCCoreBundle\Controller;

use ARPCCoreBundle\Entity\Player;
use ARPCCoreBundle\Form\PlayerType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayerController extends Controller
{
    //------- Actions -------//

    /**
     * Show currently log in player
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $player = $this->get('arpc.environnement')->getPlayer();

        return $this->viewPlayer($player);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addAction(Request $request)
    {
        $player = new Player();

        return $this->persistPlayer($player, $request);
    }

    /**
     * @param $code
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function editAction($code, Request $request)
    {
        $player = $this->getRepository()->findOneByFfeCode($code);

        return $this->persistPlayer($player, $request);
    }

    /**
     * Show a player using id
     *
     * @param $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showIdAction($id)
    {
        $player = $this->getRepository()->find($id);

        return $this->viewPlayer($player);
    }

    /**
     * Show a player using Ffe code
     *
     * @param $code
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showCodeAction($code)
    {
        $player = $this->getRepository()->findOneByFfeCode($code);

        return $this->viewPlayer($player);
    }

    //------- Private -------//

    /**
     * Shortcut for Player repository
     *
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    private function getRepository()
    {
        return $this->getDoctrine()->getRepository('ARPCCoreBundle:Player');
    }

    /**
     * @param $player
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function viewPlayer($player)
    {
        if(!$player)
        {
            throw $this->createNotFoundException('Error while retrieving player');
        }

        return $this->render('ARPCCoreBundle:Player:details.html.twig',
            array('player' => $player));
    }

    /**
     * @param Player $player
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function persistPlayer(Player $player, Request $request)
    {
        $form = $this->createForm(PlayerType::class, $player);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($player);
            $em->flush();

            return viewPlayer($player);
        }

        return $this->render('ARPCCoreBundle:Player:add.html.twig', array(
            'form' => $form->createView()));
    }
}
