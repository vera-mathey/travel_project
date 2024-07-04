<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\City;
use App\Entity\Country;
use App\Entity\Post;
use App\Entity\User;
use App\Entity\Place;
use App\Entity\Comment;
use App\Repository\CityRepository;
use App\Repository\CountryRepository;
use App\Repository\PlaceRepository;
use App\Repository\PostRepository;
use App\Repository\UserRepository;
use App\Repository\CommentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Form\CommentType;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use App\Form\UserType;

class PostController extends AbstractController
{
    #[Route('/', name: 'app_post')]
    public function index(EntityManagerInterface $em, UserRepository $userRepo, User $user, Request $request, PostRepository $postRepo): Response
    {
        //Destinations vacances
        $category = $em->getRepository(Category::class)->findOneBy(['id' => '10']);    
        $cityList = $em->getRepository(City::class)->findBy(['category' => $category], ['id' => 'DESC']);

        //carusel
        //$category = $em->getRepository(Category::class)->findOneBy(['id' => '4']);
        $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']);    
        //$ouPartirList = $em->getRepository(Post::class)->findBy(['subject' => $subject], ['id' => 'DESC']);

        //actualités
        $actualites = $this->postRepository->findAllArticles();

        //guides
        $guides = $userRepo->findByRole('ROLE_GUIDE', 'createdAt', 'DESC', 4);

        //Affichage de toutes les pays dans le menu
        $countriesMenu = $em->getRepository(Country::class)->findAll();

        return $this->render('post/index.html.twig', [
            'cityList' => $cityList,
            'ouPartirList' => $ouPartirList,
            'actualites' => $actualites,
            'guides' => $guides,
            'countriesMenu' => $countriesMenu,
        ]); 
    }

    
    //Affichage de toutes les pays
    #[Route('/countries', name: 'app_countries')]
    public function countries(CountryRepository $countryRepo, EntityManagerInterface $em, PostRepository $postRepo): Response
    {
        //affichage d'articles 'où partir' menu  
        $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
        //Affichage de toutes les pays dans le menu
        $countriesMenu = $em->getRepository(Country::class)->findAll();

        return $this->render('post/countries.html.twig', [
            'countries' => $countryRepo->findBy([], ['name' => 'ASC']),  
            'countriesMenu' => $countriesMenu,
            'ouPartirList' => $ouPartirList,
        ]);
        
    }


    //Affichage d'un pays + Affichage de toutes les villes
    #[Route(path:'country/{id}', name: 'showonecountry', requirements:['/country/id' => '\d+'])]
    public function showonecountry(Country $country, CountryRepository $countryRepository,CityRepository $cityRepo, $id, EntityManagerInterface $em, PostRepository $postRepo)
        {
            //affichage d'articles 'où partir' menu
            $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
            //Affichage de toutes les pays dans le menu
            $countriesMenu = $em->getRepository(Country::class)->findAll();
            $country = $countryRepository->find($id);
            $cities = $cityRepo->citiesByCountry($id);
                if(!$country){
                    return $this->redirectToRoute('app_post');
                }
                return $this->render('show/readOneCountry.html.twig', [
                    'country' => $country,
                    'cities' => $cities,
                    'countriesMenu' => $countriesMenu,
                    'ouPartirList' => $ouPartirList,
                ]);
        }
    //Affichage de toutes les actualités
    private $postRepository;
    public function __construct(PostRepository $postRepo){
        $this->postRepository = $postRepo;
    }
    
    #[Route('/actualites', name: 'app_actualites')]
    public function actualites(EntityManagerInterface $em, PostRepository $postRepo): Response
    {
        //affichage d'articles 'où partir' menu
        $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
        //Affichage de toutes les pays dans le menu
        $countriesMenu = $em->getRepository(Country::class)->findAll();

        $postList = $this->postRepository->findAllArticles();
        return $this->render('post/actualites.html.twig', [
            'postList' =>$postList,
            'countriesMenu' => $countriesMenu,
            'ouPartirList' => $ouPartirList,
        ]);
            
    }    
    //Affichage d'un article
    #[Route(path:'post/{id}', name: 'showonepost', requirements:['/post/id' => '\d+'])]
    public function showonePost(Post $post, PostRepository $postRepository, $id, EntityManagerInterface $em, PostRepository $postRepo)
        {
            //affichage d'articles 'où partir' menu
            $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
            $countriesMenu = $em->getRepository(Country::class)->findAll();

            $post = $em->getRepository(Post::class)->find($post);
            $category = $post->getCategory();

            $cities = $em->getRepository(City::class)
            ->findByCategory($category);
            
            $post = $postRepository->find($id);
                if(!$post){
                }
                return $this->render('show/readOnePost.html.twig', [
                    'post' => $post,
                    'countriesMenu' => $countriesMenu, 
                    'ouPartirList' => $ouPartirList,
                    'cities' => $cities,                 
                ]);
                
        }
    //Affichage d'une ville
    #[Route(path:'city/{id}', name: 'showone', requirements:['/city/id' => '\d+'])]
    public function showone(City $city, CityRepository $cityRepository,PlaceRepository $placeRepo,$id, EntityManagerInterface $em, PostRepository $postRepo)
        {
            //affichage d'articles 'où partir' menu
            $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
            //Affichage de toutes les pays dans le menu
            $countriesMenu = $em->getRepository(Country::class)->findAll();
            $city = $cityRepository->find($id);
            $placesCity = $placeRepo->placesByCity($id);
                if(!$city){
                    return $this->redirectToRoute('app_post');
                }
                return $this->render('show/readOneCity.html.twig', [
                    'city' => $city,
                    'places' => $placesCity,
                    'countriesMenu' => $countriesMenu,
                    'ouPartirList' => $ouPartirList, 
                ]);
        }
    //Affichage de toutes les villes de categorie 'sans avion'
    #[Route('/sansavion', name: 'app_sansavion')]
    public function sansAvion(EntityManagerInterface $em, PostRepository $postRepo)
    {
        //affichage d'articles 'où partir' menu
        $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']); 
        //Affichage de toutes les pays dans le menu
        $countriesMenu = $em->getRepository(Country::class)->findAll();

        $category = $em->getRepository(Category::class)->findOneBy(['id' => '3']);   
        $cityList = $em->getRepository(City::class)->findBy(['category' => $category], ['id' => 'DESC']);

        return $this->render('post/sansAvion.html.twig', [
            'cityList' => $cityList,
            'countriesMenu' => $countriesMenu,
            'ouPartirList' => $ouPartirList, 
            
        ]);
        
    }
    //Affichage d'une place
    #[Route(path:'place/{id}', name: 'showoneplace', requirements:['/city/id' => '\d+'])]
    public function showoneplace(Place $place, PlaceRepository $placeRepo, EntityManagerInterface $em, CommentRepository $commentRepo,  Request $request, UrlGeneratorInterface $urlGenerator, $id, PostRepository $postRepo)
        {
                //affichage d'articles 'où partir' menu
                $ouPartirList = $postRepo->findBy(['subject' => 'Où partir']);     
                $countriesMenu = $em->getRepository(Country::class)->findAll();
                $place = $placeRepo->find($id);
            
                if(!$place){
                    return $this->redirectToRoute('app_post');
                }
                // Récupérer les commentaires associés au post
                $comments=$commentRepo->findBy(['place'=>$place],['createdAt'=>'ASC']);

                //instancier(créer) le comment
                $comment = new Comment();
                $commentForm=$this->createForm(CommentType::class, $comment);
                $commentForm->handleRequest($request);
                //faire les conditions
                if ($commentForm->isSubmitted() && $commentForm->isValid() && $this->isGranted('ROLE_USER')){
                    $comment->setPlace($place);
                    $comment->setUser($this->getUser());
                    $comment->setContent($commentForm->get('content')->getData());
                
                //persister
                $em->persist($comment);
                //ecrire dans la bdd
                $em->flush();
                //reinicialiser le formulaire
                $comment = new Comment();
                $commentForm = $this->createForm(CommentType::class, $comment);
                //$commentForm->handleRequest($request); 
                //réderiction
                 //sécurité (empecher modification d'ID dans l'adresse de la page par la personne malveillante)
                return new RedirectResponse($urlGenerator->generate('showoneplace', ['id'=>$place->getId()]));
                }
            //Affichage
            if ($this->isGranted('ROLE_USER')) {
                return $this->render('show/readOnePlace.html.twig', [
                    'place' => $place,
                    'commentForm' => $commentForm->createView(),
                    'comments' => $comments,
                    'countriesMenu' => $countriesMenu,
                    'ouPartirList' => $ouPartirList,
                ]);
            } else {
                return $this->render('show/readoneplace.html.twig', [
                    'place' => $place,
                    'comments' => $comments,
                    'countriesMenu' => $countriesMenu,
                    'ouPartirList' => $ouPartirList,
                ]);
            }
        }
}
