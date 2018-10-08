<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Defines the sample data to load in the database when running the unit and
 * functional tests. Execute this command to load the data:
 *
 *   $ php app/console doctrine:fixtures:load
 *
 * See http://symfony.com/doc/current/bundles/DoctrineFixturesBundle/index.html
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class LoadFixtures implements FixtureInterface, ContainerAwareInterface
{
    /** @var ContainerInterface */
    private $container;

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
    }

    private function loadUsers(ObjectManager $manager)
    {
        $admin = new Admin();
        $admin->setNom('coulibaly');
        $admin->setPrenom('ibou');
        
        $admin->setUsername('ibou@symfony.com');
        $admin->setPassword('passer');
        $admin->setIdEtatCivil('23');
        $admin->setRole('ROLE_ADMIN');
        

        $factory = $this->container->get('security.encoder_factory');
        $encoder = $factory->getEncoder($admin);
        $admin->encodePassword($encoder);
        
        $manager->persist($admin);
        $manager->flush();
    } 

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}
