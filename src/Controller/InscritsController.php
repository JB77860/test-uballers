<?php

namespace App\Controller;

use App\Entity\Applicant;
use App\Form\ApplicantType;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InscritsController extends AbstractController
{
    /**
     * @Route("/inscrits", name="inscrits")
     */
    public function index()
    {
        return $this->render('inscrits/index.html.twig', [
            'controller_name' => 'InscritsController',
        ]);
    }
}

