<?php

namespace ContainerKQPnepY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OP6OXA9Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.OP6OXA9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OP6OXA9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'commentRepo' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
            'user' => ['privates', 'App\\Entity\\User', 'getUserService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'commentRepo' => 'App\\Repository\\CommentRepository',
            'em' => '?',
            'urlGenerator' => '?',
            'user' => 'App\\Entity\\User',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
