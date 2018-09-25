<?php

namespace Mairie\MairieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('@MairieMairie/Default/index.html.twig');
    }
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('@MairieMairie/Default/login.html.twig');
    }
}
 