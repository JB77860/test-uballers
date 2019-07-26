<?php

namespace App\Controller;

use App\Entity\Inscrits;
use App\Form\InscritsType;
use App\Repository\InscritsRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    /**
     * @Route("/home", name="home")
     * @return Response
     */
    public function index() : Response
    {


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @param Request $request
     * @param InscritsRepository $inscritsRepository
     * @return Response
     */
    public function new(Request $request, InscritsRepository $inscritsRepository): Response

    {
        $inscrit = new Inscrits();
        $form = $this->createForm(InscritsType::class, $inscrit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($inscrit);
            $entityManager->flush();

            return $this->redirectToRoute('inscrits/index.html.twig');
        }

        return $this->render('home/index.html.twig', [
            'inscrits' => $inscrit,
            'form' => $form->createView(),
            'data' => $request
        ]);
    }

}
