<?php

namespace App\Controller;

use App\Entity\Dados;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class FormController extends Controller
{
    /**
     * @Route("/test",name="test")
     */
    public function other(){
        return new Response('OMG! This Work!');
    }
    /**
     * @Route("/", name="enviar")
     */
    public function new(Request $request)
    {
        // 1) build the form
        $user = new Dados();
        $form = $this->createForm(FormAdminController::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('test');
        }

        return $this->render(
            'formulario/form.html.twig',
            array('form' => $form->createView())
        );
    }
}