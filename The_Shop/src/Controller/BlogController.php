<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homepage(){
        return $this->render('blog/homepage.html.twig');
    }
    /**
     * @Route("/The-Shop/{slug}", name="shop")
     */
    public function pedido($slug){

        return $this->render('blog/encomendas.html.twig',['slug' => $slug]);
    }
    /**
     * @Route("/informacoes",name="contactos")
     */
    public function informacao(){
        return $this->render('blog/informacao.html.twig');
    }
    /**
     * @Route("/Enviar-Email", name="email")
     */
    public function email(){
        return $this->render('blog/email.html.twig');
    }
}