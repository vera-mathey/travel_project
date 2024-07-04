<?php

namespace ContainerKQPnepY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTexter_Messenger_SmsHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'texter.messenger.sms_handler' shared service.
     *
     * @return \Symfony\Component\Notifier\Messenger\MessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'MessageHandler.php';

        return $container->privates['texter.messenger.sms_handler'] = new \Symfony\Component\Notifier\Messenger\MessageHandler(($container->privates['texter.transports'] ?? $container->load('getTexter_TransportsService')));
    }
}
