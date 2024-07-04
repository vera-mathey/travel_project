<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Country;
use App\Entity\Category;
use App\Entity\Post;
use App\Form\RegistrationFormType;
use App\Security\UsersAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;


class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, Security $security, UserAuthenticatorInterface $userAuthenticator, UsersAuthenticator $authenticator, EntityManagerInterface $em): Response
    {
        //Affichage articles 'où partir'
        $category = $em->getRepository(Category::class)->findOneBy(['id' => '4']);    
        $ouPartirList = $em->getRepository(Post::class)->findBy(['category' => $category], ['id' => 'DESC']);
        $countriesMenu = $em->getRepository(Country::class)->findAll();
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $avatarFile = $form->get('avatar')->getData();
                if($avatarFile){
                    $newFileName = uniqid().'.'. $avatarFile->getExtension();
                    $avatarFile->move($this->getParameter('kernel.project_dir').'\public\images\avatars',
                    $newFileName);
                    $user->setAvatar($newFileName);
                };   
                    
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $em->persist($user);
            $em->flush();

            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'countriesMenu' => $countriesMenu,
            'ouPartirList' => $ouPartirList,
        ]);
    }
}
