<?php

namespace Mairie\MairieBundle\Controller;
 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
 
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\SimpleFormAuthenticatorInterface;
 
class AuthentificationController{
 
  private $twig;
 
  public function __construct(Environment $twig){
      $this->twig=$twig;
  }
 
  /**
  * @Route("/login", name="login")
  */
  public function login(Request $request, AuthenticationUtils $authenticationUtils){
 
    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();
 
    // last mail entered by the user
    $lastMail = $authenticationUtils->getLastUsername();
 
    return new Response($this->twig->render('login.html.twig',array(
      'last_mail' => $lastMail,
      'error' => $error,
    )));
  }
}

