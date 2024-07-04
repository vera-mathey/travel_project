<?php

namespace ContainerC2YhDyP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LAr61gpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lAr61gp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lAr61gp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'countryRepo' => ['privates', 'App\\Repository\\CountryRepository', 'getCountryRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'postRepo' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'countryRepo' => 'App\\Repository\\CountryRepository',
            'em' => '?',
            'postRepo' => 'App\\Repository\\PostRepository',
        ]);
    }
}
