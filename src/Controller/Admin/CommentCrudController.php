<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use App\Entity\Comment;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class CommentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comment::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setEntityLabelInPlural('Commentaires')
        ->setEntityLabelInSingular("Commentaire")
        ->setPageTitle("index", "Voyagez naturellement - Commentaires")
        ->setEntityLabelInSingular('Commentaire')
        ->setPaginatorPageSize(10);
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->OnlyOnIndex(),
            AssociationField::new('user')->setColumns('col-md-4'),
            AssociationField::new('guide')->setColumns('col-md-4'),
            //AssociationField::new('place')->setColumns('col-md-4'),
            TextEditorField::new('content')->setColumns('col-md-12|raw|nl2br'),
            
        ];
    }
}
