<?php

namespace ContainerLg8OSzz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Post' shared autowired service.
     *
     * @return \App\Entity\Post
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Post.php';

        return $container->privates['App\\Entity\\Post'] = new \App\Entity\Post();
    }
}
