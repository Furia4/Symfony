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
     * @Route("/encomendar", name="encomenda")
     */
    public function pedido(){
        return $this->render('blog/encomendas.html.twig');
    }
}