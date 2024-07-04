<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Country;
use App\Entity\Category;
use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Comment;
use App\Repository\UserRepository;
use App\Repository\CommentRepository;
use App\Repository\PostRepository;
use App\Form\UserCommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use App\Controller\EntityManager;
use App\Form\UserType;


class UserController extends AbstractController
{
    //Affichage de toutes les guides
    #[Route('/guides', name: 'app_guides')]
    public function guides(EntityManagerInterface $em, UserRepository $userRepo, PostRepository $postRepo)
    {
        $guides = $userRepo->findByRole('ROLE_GUIDE', 'createdAt', 'DESC');
        //Affichage de toutes les pays dans le menu
        $countriesMenu = $em->getRepository(Country::class)->findAll();
        //Affichage articles 'où partir'
        $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 

        return $this->render('post/guides.html.twig', [
            'guides' => $guides,
            'countriesMenu' => $countriesMenu,
            'ouPartirList' => $ouPartirList,
        ]);
        
    }
    //Affichage d'un guide
    #[Route(path:'/user/{id}', name: 'showoneguide', requirements:['id' => '\d+'])]
    public function showoneGuide(Request $req, User $user, UserRepository $userRepository, CommentRepository $commentRepo, EntityManagerInterface $em, Request $request, UrlGeneratorInterface $urlGenerator, $id, PostRepository $postRepo)
        {
            //Affichage articles 'où partir'
            $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
            //Affichage de toutes les pays dans le menu
            $countriesMenu = $em->getRepository(Country::class)->findAll();
            $user = $userRepository->find($id);

                // Récupérer les commentaires associés au guide
                $guide = $userRepository->findOneBy(['roles' => 'ROLE_GUIDE', 'id' => $user->getId()]);
                $commentsUser = $commentRepo->findBy(['guide' => $user], ['createdAt' => 'DESC']);

                //instancier(créer) le comment
                $commentUser = new Comment();
                $commentUserForm=$this->createForm(UserCommentType::class, $commentUser);
                $commentUserForm->handleRequest($request);
                //faire les conditions
                if ($commentUserForm->isSubmitted() && $commentUserForm->isValid() && $this->isGranted('ROLE_USER')){
                    $commentUser->setUser($user);
                    $commentUser->setContent($commentUserForm->get('content')->getData());
                    $commentUser->setUser($this->getUser());
                    $commentUser->setGuide($user);
                    //persister
                    $em->persist($commentUser);
                    //ecrire dans la bdd
                    $em->flush();
                    //reinicialiser le formulaire
                    $commentUser = new Comment();
                    $commentUserForm = $this->createForm(UserCommentType::class, $commentUser);
                    $commentUserForm->handleRequest($request); 

                return new RedirectResponse($urlGenerator->generate('showoneguide', ['id'=>$user->getId()]));
                }
                if ($this->isGranted('ROLE_USER')) {
                    return $this->render('show/readoneGuide.html.twig', [
                        'guide' => $user,
                        'commentUserForm' => $commentUserForm->createView(),
                        'commentsUser' => $commentsUser,
                        'countriesMenu' => $countriesMenu,
                        'ouPartirList' => $ouPartirList,
                    ]);
                } else {
                return $this->render('show/readoneGuide.html.twig', [
                    'guide' => $user,
                    'commentsUser' => $commentsUser,
                    'countriesMenu' => $countriesMenu,
                    'ouPartirList' => $ouPartirList,                 
                ]);
            }    
        }
 //Espace utilisateur
 #[Route('/edition/{id}', name: 'user.edit', methods: ['GET', 'POST'])]
 public function edit(User $user, Request $request, EntityManagerInterface $em, PostRepository $postRepo): Response
 {
    //Affichage articles 'où partir' menu
    $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
    //Affichage des pays menu
    $countriesMenu = $em->getRepository(Country::class)->findAll();

     if(!$this->getUser()){
         return $this->redirectToRoute('app_login');
     }
    
     if ($this->getUser() !==$user) {
         return $this->redirectToRoute('app_post');
     }

     $form = $this->createForm(UserType::class, $user);

     $form->handleRequest($request);
     
     if($form->isSubmitted() && $form->isValid()) {
         $avatarFile = $form->get('avatar')->getData();
             if($avatarFile){
                 $newFileName = uniqid().'.'. $avatarFile->getExtension();
                 $avatarFile->move($this->getParameter('kernel.project_dir').'\public\images\avatars',
                 $newFileName);   
                 $user->setAvatar($newFileName);
         }
         $em->persist($user);
         $em->flush();
         $this->addFlash(
             'succes',
             'Les informations de votre compte ont bien été modifiées'
         );

         return $this->redirectToRoute('app_post');
     }

     return $this->render('user/edit.html.twig', [
         'form' => $form->createView(),
         'user' =>$user,
         'countriesMenu' => $countriesMenu,
         'ouPartirList' => $ouPartirList, 
     ]);
         
 }    
}
