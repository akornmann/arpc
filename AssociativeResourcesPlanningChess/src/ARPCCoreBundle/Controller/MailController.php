<?php

namespace ARPCCoreBundle\Controller;

use ARPCCoreBundle\Entity\Mail;
use ARPCCoreBundle\Form\MailType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MailController extends Controller
{
    public function sendAction($to, Request $request)
    {
        $mail = new Mail();

        $form = $this->createForm(MailType::class, $mail);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $from = $this->get('arpc.environnement')->getMailSender();

            $message = \Swift_Message::newInstance()
                ->setSubject($form->get('subject')->getData())
                ->setTo($to)
                ->setFrom($from)
                ->setBody($form->get('body')->getData());

            $this->get('mailer')->send($message);

            return $this->redirectToRoute('club_show_player_list');
        }
        
        return $this->render('ARPCCoreBundle:Mail:send.html.twig', array(
            'form' => $form->createView(),));
    }
}
