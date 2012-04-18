<?php

namespace Aoceu\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PortfolioController extends Controller
{
    
    public function mainAction()
    {
        return $this->render('AoceuSiteBundle:Portfolio:main.html.twig');
    }
}
