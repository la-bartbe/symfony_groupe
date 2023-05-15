<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;

class UsersController extends AbstractController
{

    #[Route('/users', name: 'app_users')]
    public function index(UsersRepository $userRepo)
    {
       
        $usersList = $userRepo->findAll() ; 
       
        return $this->render('users/index.html.twig', [
            'users' => $usersList
        ] );
    }
    #[Route('/users/{id}', name: 'users_edit')]
    public function edit(int $id ,UsersRepository $userRepo)
    {
       
        $usersList = $userRepo->find($id) ; 
       
        return $this->render('users/edit.html.twig', [
            'edit' => $usersList
        ] );
    }

}
