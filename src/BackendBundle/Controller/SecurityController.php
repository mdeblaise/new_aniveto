<?php

namespace BackendBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route(service="admin.security.controller")
 */
class SecurityController
{
    protected $authenticationUtils;

    protected $templateEngine;

    public function __construct(
        AuthenticationUtils $authenticationUtils,
        TwigEngine $templateEngine
    ) {
        $this->authenticationUtils = $authenticationUtils;
        $this->templateEngine = $templateEngine;
    }

    /**
     * @Route("/login", name="admin_login")
     */
    public function loginAction(Request $request)
    {
        // get the login error if there is one
        $error = $this->authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $this->authenticationUtils->getLastUsername();

        dump($lastUsername);

        return new Response($this->templateEngine->render('BackendBundle:Security:login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]));
    }

    /**
     * @Route("/logout", name="admin_logout")
     */
    public function logoutAction(Request $request)
    {
        // Nothing to do
    }
}
