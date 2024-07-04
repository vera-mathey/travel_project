<?php

namespace App\Controller\Admin;

use App\Entity\Place;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;

class PlaceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Place::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setEntityLabelInPlural('Lieux')
        ->setEntityLabelInSingular("Lieu")
        ->setPageTitle("index", "Voyagez naturellement - Lieux")
        ->setEntityLabelInSingular('Lieu')
        ->setPaginatorPageSize(10);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->OnlyOnIndex(),
            TextField::new('name')->setColumns('col-md-4'),
            TextField::new('address')->setColumns('col-md-4'),
            $image = ImageField::new('image')
                ->setUploadDir('public/images/destinations/places')
                ->setBasePath('images/destinations/places')
                ->setSortable(false)
                ->setFormTypeOption('required', false)->setColumns('col-md-4'),
            TextEditorField::new('description')->setColumns('col-md-12'),
            AssociationField::new('city')->setColumns('col-md-4'),
            AssociationField::new('category')->setColumns('col-md-4'),
            BooleanField::new('suitableforchildren', 'Convient aux enfants')->setColumns('col-md-4'),
            
        ];
    }
   
}
