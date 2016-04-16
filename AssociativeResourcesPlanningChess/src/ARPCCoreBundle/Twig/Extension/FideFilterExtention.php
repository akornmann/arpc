<?php

// src/ARPCCoreBundle/Twig/Extension/FideFilterExtention.php

namespace ARPCCoreBundle\Twig\Extension;

class FideFilterExtention extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('fideLink', array($this, 'fideFilter')),
        );
    }

    public function fideFilter($fideCode)
    {
        $link = "http://ratings.fide.com/card.phtml?event=".$fideCode;

        return $link;
    }

    public function getName()
    {
        return 'fidefilter_extension';
    }
}