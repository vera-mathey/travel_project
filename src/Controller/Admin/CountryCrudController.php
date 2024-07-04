<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use App\Entity\Country;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CountryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Country::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setEntityLabelInPlural('Pays')
        ->setEntityLabelInSingular("Pays")
        ->setPageTitle("index", "Voyagez naturellement - Pays")
        ->setEntityLabelInSingular('Pays')
        ->setPaginatorPageSize(10);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->OnlyOnIndex(),
            TextField::new('name')->setColumns('col-md-4'),
            $image = ImageField::new('image')
                ->setUploadDir('public/images/posts')
                ->setBasePath('images/posts')
                ->setSortable(false)
                ->setFormTypeOption('required', false)->setColumns('Col-md-4'),
            AssociationField::new('category')->setColumns('col-md-4'),
            TextEditorField::new('description')->setColumns('col-md-12|raw|nl2br'),
            
        ];
    }
   
}