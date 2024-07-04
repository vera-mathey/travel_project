<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Post;
use App\Entity\Category;
use App\Entity\City;
use App\Entity\Comment;
use App\Entity\Country;
use App\Entity\Place;
use App\Repository\UserRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractDashboardController
{
//Declarer la variable $userRepository en protected
    protected $userRepository;
    //Mettre en place le constructor
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();
        //fixer le role le moins élevé
        if($this->isGranted('ROLE_EDITOR')) {
            return $this->render('admin/dashboard.html.twig');
        }else
            return $this->redirectToRoute('app_post');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Travel project');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Aller au site', 'fa-solid fa-arrow-rotate-left', 'app_post');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);

        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::linkToDashboard('Tableau de bord', 'fa-solid fa-table-columns')
            ->setPermission('ROLE_ADMIN');
        }
        if($this->isGranted('ROLE_EDITOR')){
            yield MenuItem::section('Articles');
            yield MenuItem::subMenu('Articles', 'fas fa-newspaper')
            ->setSubItems([
                MenuItem::LinkToCrud('Créer un article', 'fa-regular fa-square-plus', Post::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir les articles', 'fas fa-eye', Post::class)
            ]);
        }
        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::section('Utilisateur');
            yield MenuItem::subMenu('Utilisateur','fa-solid fa-user')
            ->setSubItems([
                MenuItem::linkToCrud('Créer un utilisateur','fa-regular fa-square-plus', User::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir utilisateurs','fas fa-eye', User::class),
            ]);
        }
        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::section('Catégorie');
            yield MenuItem::subMenu('Catégorie','fa-solid fa-list')
            ->setSubItems([
                MenuItem::linkToCrud('Créer une categorie','fa-regular fa-square-plus', Category::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir catégories','fas fa-eye', Category::class),
            ]);
        }
        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::section('Pays');
            yield MenuItem::subMenu('Pays','fa-solid fa-flag')
            ->setSubItems([
                MenuItem::linkToCrud('Créer un pays','fa-regular fa-square-plus', Country::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir pays','fas fa-eye', Country::class),
            ]);
        }
        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::section('Ville');
            yield MenuItem::subMenu('Ville','fa-solid fa-tree-city')
            ->setSubItems([
                MenuItem::linkToCrud('Créer une ville','fa-regular fa-square-plus', City::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir villes','fas fa-eye', City::class),
            ]);
        }
        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::section('Lieu');
            yield MenuItem::subMenu('Lieu','fa-solid fa-location-dot')
            ->setSubItems([
                MenuItem::linkToCrud('Créer un lieu','fa-regular fa-square-plus', Place::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir lieux','fas fa-eye', Place::class),
            ]);
        }
        if($this->isGranted('ROLE_ADMIN')){
            yield MenuItem::section('Commentaire');
            yield MenuItem::subMenu('Commentaire','fa-solid fa-comments')
            ->setSubItems([
                MenuItem::linkToCrud('Créer un commentaire','fa-regular fa-square-plus', Comment::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir comentaires','fas fa-eye', Comment::class),
            ]);
        }
        if($this->isGranted('ROLE_SUPER_ADMIN')){
            yield MenuItem::section('Utilisateurs');
            yield MenuItem::subMenu('Utilisateurs','fa-solid fa-user')
            ->setSubItems([
                MenuItem::linkToCrud('Créer un utilisateur','fa-regular fa-square-plus', User::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Voir uilisateurs','fas fa-eye', User::class),
            ]);
        }
    }
}
