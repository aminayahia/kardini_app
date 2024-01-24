<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UsersRepository;
use App\Entity\Users;


use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;


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
  
    #[Route('/{id<\d+>}', name: 'detail_client')]
    public function detail(ManagerRegistry $doctrine,$id): Response
    {
        $repository= $doctrine->getRepository(Users::class);
        $client = $repository->find($id);
        if(!$client){
            $this->addFlash("error","la personne $id n'exsite pas");
            return $this->redirectToRoute('list_personne');
        }
        return $this->render('admin/detail_client.html.twig',['client'=>$client]);
    }


    #[Route('/delete/{id}', name: 'delete_personne')]
    public function deletePersonne(Users $personne = null,ManagerRegistry $doctrine): RedirectResponse
    {
        // recuperer la personne


        //si la personne existe => supprimer et retunrner un msg
        if($personne){
            $manager = $doctrine->getManager();
            $manager->remove($personne);

            $manager->flush();
            $this->addFlash('success','la personne a été bien supprimé');
        }else{
            $this->addFlash('errer','la personne inexsitante');

        }
        
return $this->redirectToRoute('app_listeclient');
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
