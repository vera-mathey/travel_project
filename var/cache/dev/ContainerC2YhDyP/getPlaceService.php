<?php

namespace ContainerC2YhDyP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlaceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Place' shared autowired service.
     *
     * @return \App\Entity\Place
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Place.php';

        return $container->privates['App\\Entity\\Place'] = new \App\Entity\Place();
    }
}