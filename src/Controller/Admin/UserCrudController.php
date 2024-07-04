<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Validator\Constraints\Required;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Utilisateurs')
            ->setEntityLabelInSingular('Utilisater')
            ->setPageTitle("index", "Voyagez naturellement - utilisateurs")
            ->setPaginatorPageSize(10);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id')->onlyOnIndex(),
            IntegerField::new('email')->onlyOnIndex(),
            TextField::new('firstname')->setColumns('col-md-4'),
            TextField::new('lastname')->setColumns('col-md-4'),
            TextField::new('city')->setColumns('col-md-4'),
            //TextField::new('country')->setColumns('col-md-4'),
            DateField::new('createdAt')->hideOnForm(),
            $avatar = ImageField::new('avatar')
            ->setUploadDir('public/images/avatars')
            ->setBasePath('images/avatars')
            ->setSortable(False)
            ->setCssClass('image_ronde')
            ->setFormTypeOption('required', False)->setColumns('col-md-4'),
            
            $roles = ChoiceField::new('roles')->setColumns('col-md-6')->setChoices([
                'ROLE_USER' => 'ROLE_USER',
                'ROLE_EDITOR' => 'ROLE_EDITOR',
                'ROLE_GUIDE' => 'ROLE_GUIDE',
                'ROLE_OWNER' => 'ROLE_OWNER',
                'ROLE_MODO' => 'ROLE_MODO',
                'ROLE_ADMIN' => 'ROLE_ADMIN',
                'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN',
            ])->allowMultipleChoices(),
            TextEditorField::new('description')->setColumns('col-md-12|raw|nl2br'),
            BooleanField::new('roleadmin')->setColumns('col-md-2'),
        ];
    }
    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->setPermission(Action::DELETE, 'ROLE_SUPER_ADMIN');
    }    
}
