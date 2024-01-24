<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Entity\Users;
use App\Controller\ManagerRegistry;
#[
    Route('admin'),
    IsGranted('ROLE_ADMIN')
 ]
class AdminController extends AbstractController
{
   

    #[Route('/', name: 'app_admin')]
    
    public function index(UsersRepository $userRepository): Response
    {   
        $clientCount = $userRepository->countByRole('ROLE_CLIENT');
        $vendeurCount = $userRepository->countByRole('ROLE_VENDEUR');

        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'clientCount' => $clientCount,
            'vendeurCount' => $vendeurCount,
        ]);
    }
    #[Route('/listeclient', name: 'app_listeclient')]
    public function clients(UsersRepository $userRepository): Response
    {
        $clients = $userRepository->findClients();

        return $this->render('admin/clients.html.twig', [
            'controller_name' => 'AdminController',
            'clients' => $clients,
        ]);
    } 
    #[Route('/listevendeur', name: 'app_listevendeur')]
    public function vendeurs(): Response
    {    
       /* $repository = $doctrine->getRepository(Users::class);
        $clients = $repository->findAll();*/
        return $this->render('admin/vendeurs.html.twig', [
            'controller_name' => 'AdminController',
            //'clients' => $clients,
        ]);
    }     
    #[Route('/listereclamations', name: 'app_listereclamations')]
    public function reclamations(): Response
    {    
       /* $repository = $doctrine->getRepository(Users::class);
        $clients = $repository->findAll();*/
        return $this->render('admin/reclamations.html.twig', [
            'controller_name' => 'AdminController',
            //'clients' => $clients,
        ]);
    } 
}
