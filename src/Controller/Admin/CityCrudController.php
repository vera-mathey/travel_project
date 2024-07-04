<?php

namespace App\Controller\Admin;

use App\Entity\City;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;

class CityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return City::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setEntityLabelInPlural('Villes')
        ->setEntityLabelInSingular("Ville")
        ->setPageTitle("index", "Voyagez naturellement - Villes")
        ->setEntityLabelInSingular('Ville')
        ->setPaginatorPageSize(10);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->OnlyOnIndex(),
            TextField::new('name')->setColumns('col-md-3'),
            
            $image = ImageField::new('image')
                ->setUploadDir('public/images/destinations/villes')
                ->setBasePath('images/destinations/villes')
                ->setSortable(false)
                ->setFormTypeOption('required', false)->setColumns('col-md-3'),
            AssociationField::new('country')->setColumns('col-md-3'),
            AssociationField::new('category')->setColumns('col-md-3'),
            TextEditorField::new('description')->setColumns('col-md-12|raw|nl2br'),
        ];
    }
   
}
