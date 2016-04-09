<?php

namespace ARPCCoreBundle\Services\Environnement;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ARPCEnvironnement
{
    private $authorizationChecker;
    private $tokenStorage;
    
    public function __construct(AuthorizationCheckerInterface $authorizationChecker, TokenStorageInterface $tokenStorage)
    {
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage = $tokenStorage;
    }
    
    
    public function getClub()
    {
        if (!$this->authorizationChecker->isGranted('IS_AUTHENTICATED_FULLY'))
        {
            throw new AccessDeniedException();
        }

        $user = $this->tokenStorage->getToken()->getUser();
        
        return $user->getClub()->getCode();
    }
    
    public function getFederation()
    {
        return "FRA";
    }
    
    public function getMailSender()
    {
        return "kornmannalexandre@wanadoo.fr";
    }
}