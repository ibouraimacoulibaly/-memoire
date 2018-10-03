<?php

namespace Mairie\MairieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class DefaultController extends Controller
{
    /**
     * @Route("/", name="welcome")
     */
    public function indexAction()
    {
        return $this->render('@MairieMairie/Default/index.html.twig');
    }
   
}
 