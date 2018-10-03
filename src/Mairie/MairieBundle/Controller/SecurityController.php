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
        $session = $request->getSession();
 
        // get the login error if there is one
        if ($request->attributes->has(self::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                self::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(self::AUTHENTICATION_ERROR);
            $session->remove(self::AUTHENTICATION_ERROR);
        }
 
        return $this->render('@MairieMairie/Security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(self::LAST_USERNAME),
                'error'         => $error,
                // ...
            )
        );
    }
}