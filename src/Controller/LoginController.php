<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use PixelOpen\CloudflareTurnstileBundle\Type\TurnstileType;


class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(Request $request): Response
    {
        /*$form = $this->createFormBuilder()
        ->add('name', TextType::class, [
            'attr' => [
                'placeholder' => 'Nom',
                'id' => 'name'
            ]
        ])
        ->add('password', PasswordType::class, [
            'attr' => [
                'placeholder' => 'Mot de passe',
                'id' => 'password'
            ]
        ])
        ->add('security', TurnstileType::class, [
            'attr' => [
                'data-action' => 'contact',
                'data-theme' => 'dark'
            ],
            'label' => false
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Connexion',
            'attr' => [
                'id' => 'submit'
            ]
        ])
        ->getForm();

        $form->handleRequest($request);*/

        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
            //'form' => $form->createView(),
        ]);
    }
}
