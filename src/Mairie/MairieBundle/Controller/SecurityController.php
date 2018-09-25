<?php

namespace Mairie\MairieBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class SecurityController extends Controller
{
    const AUTHENTICATION_ERROR = \Symfony\Component\Security\Core\Security::AUTHENTICATION_ERROR;
    const LAST_USERNAME = \Symfony\Component\Security\Core\Security::LAST_USERNAME;
 
    /**
     * @Route("/login", name="login")
     * @param Request $request
     * @return Response
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        if ($error) {
        $this->addFlash('login','Error Login');
        }
	if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
        return $this->redirectToRoute('/login');
        }
	if (TRUE === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        return $this->redirectToRoute('/admin');
        } else {
	return $this->render('@MairieMairie/Default/login.html.twig', array('last_username' => $lastUsername,
                                                                          'error'         => $error));
        }
    }
    /**
     * @Route("/admin", name="admin")
     * @param Request $request
     * @return Response
     */
    public function adminAction()
    {
        if (FALSE === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
        return $this->redirectToRoute('admin');
        }
//      if (!$this->get('security.authorization_checker')->isGranted('ROLE_USER')) {
//      return $this->redirectToRoute('re_index');
//      return new Response('', 500);
//      }
        else {
        return $this->render('@MairieMairie/Default/login.html.twig');
        }
    }
    /**
     * @Route("/login", name="login")
     */
    public function logoutAction()
    {
	if ($this->get('security.token_storage')->getToken()->getUser()) {
	$this->get('security.token_storage')->setToken(null);
	$this->addFlash('logout','Logout');
	return $this->redirectToRoute('login');
	}
    }
}
