<?php

namespace Aoceu\SiteBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Description of Builder
 *
 * @author garyhogarth
 */
class Builder extends ContainerAware
{

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());
        $menu->setAttribute('id', 'main-menu');
        $menu->setAttribute('class', 'nav');

        $menu->addChild('Home', array('route' => '_welcome'));
        $menu->addChild('Blog', array('route' => 'AoceuSiteBundleBlog'));
        $menu->addChild('Portfolio', array('route' => 'AoceuSiteBundlePortfolio'));
        $menu->addChild('About', array('route' => 'AoceuSiteBundlePageAbout'));
        $menu->addChild('Contact', array('route' => 'AoceuSiteBundlePageContact'));

        return $menu;
    }
    
}