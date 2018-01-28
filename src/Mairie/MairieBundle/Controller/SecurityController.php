<?php

namespace Mairie\MairieBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class SecurityController extends Controller
{
    
 
    /**
     * @Route("/login", name="security_login_form")
     * @param Request $request
     * @return Response
     */
    public function loginAction()
    {
        
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        
	return $this->render('@MairieMairie/Security/login.html.twig', array('last_username' => $lastUsername,
                                                                          'error'         => $error));
        }

    /**
     * This is the route the login form submits to.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the login automatically. See form_login in app/config/security.yml
     *
     * @Route("/admin", name="security_login_check")
     */
    public function loginCheckAction()
    {
        return $this->render('@MairieMairie/Default/index.html.twig');
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('This should never be reached!');
    }
    }
   
    

