<?php

namespace ContainerKQPnepY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_PropertyMappingResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'vich_uploader.property_mapping_resolver' shared service.
     *
     * @return \Vich\UploaderBundle\Mapping\PropertyMappingResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'PropertyMappingResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'vich'.\DIRECTORY_SEPARATOR.'uploader-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Mapping'.\DIRECTORY_SEPARATOR.'PropertyMappingResolver.php';

        return $container->privates['vich_uploader.property_mapping_resolver'] = new \Vich\UploaderBundle\Mapping\PropertyMappingResolver($container, $container->parameters['vich_uploader.mappings'], '_name');
    }
}
