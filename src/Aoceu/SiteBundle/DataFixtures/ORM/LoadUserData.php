<?php
// src/Aoceu/SiteBundle/DataFixtures/ORM/LoadUserData.php
namespace Aoceu\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Aoceu\SiteBundle\Entity\User;
use Symfony\Component\Security\Core\Role\Role;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->createUser();

        $user->setUsername('admin');
        $user->setEmail('gary@garyhogarth.com');
        $user->setPlainPassword('password');
        $user->setEnabled(true);
        $user->addRole('ROLE_SUPER_ADMIN');

        $userManager->updateUser($user);

//        $this->addReference('test-user', $user);
    }
}

