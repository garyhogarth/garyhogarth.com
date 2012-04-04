<?php

namespace Aoceu\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    
    public function homeAction()
    {
        return $this->render('AoceuSiteBundle:Page:home.html.twig');
    }
    
    public function aboutAction()
    {
        return $this->render('AoceuSiteBundle:Page:about.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('AoceuSiteBundle:Page:contact.html.twig');
    }
}
