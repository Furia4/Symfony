<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller {
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $utils) {

        $error = $utils->getLastAuthenticationError();
        $lastUsername = $utils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'error' => $error,
            'last_username' => $lastUsername
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){}

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('hospital/home.html.twig');
    }

    /**
     * @Route("/Rececao", name="rececao")
     */
    public function rececao(){

        return $this->render('hospital/rececao.html.twig');
    }

    /**
     * @Route("/Triagem", name="triagem")
     */
    public function triagem(){
        return $this->render('hospital/triagem.html.twig');
    }
}
