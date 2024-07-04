<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;


class PostCrudController extends AbstractCrudController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setEntityLabelInPlural('Articles')
        ->setEntityLabelInSingular("Article")
        ->setPageTitle("index", "Voyagez naturellement - Articles")
        ->setEntityLabelInSingular('Article')
        ->setPaginatorPageSize(10);
    }
    
    public function configureFields(string $pageName): iterable
    {
        //$categories = $this->doctrine->getRepository(Category::class)->findAll();
        return [
            IntegerField::new('id')->onlyOnIndex(),
            TextField::new('title')->setColumns('col-md-4'),
            TextField::new('subject')->setColumns('col-md-4'),
            ImageField::new('image')
                ->setUploadDir('public/images/posts')
                ->setBasePath('images/posts')
                ->setSortable(false)
                ->setFormTypeOption('required', false)->setColumns('Col-md-4'),
            TextEditorField::new('abstract')->setColumns('col-md-12|raw|nl2br'),
            TextAreaField::new('content')->setColumns('col-md-12'),
            DateField::new('createdAt')->hideOnForm()->setColumns('col-md-3'),
            AssociationField::new('city')->setColumns('col-md-3'),
            AssociationField::new('user')->setColumns('col-md-3'),
            AssociationField::new('country')->setColumns('col-md-3'),
            AssociationField::new('category')->setColumns('col-md-3'),
            BooleanField::new('article')->setColumns('col-md-4'),
        ];
            //TextField::new('slug')->OnlyOnIndex()->setColumns('col-md-4'),
        }
    }
