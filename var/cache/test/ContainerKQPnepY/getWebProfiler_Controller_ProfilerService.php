<?php

namespace ContainerKQPnepY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_ProfilerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'web-profiler-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProfilerController.php';

        return $container->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($container->services['router'] ?? self::getRouterService($container)), ($container->services['.container.private.profiler'] ?? self::get_Container_Private_ProfilerService($container)), ($container->privates['twig'] ?? self::getTwigService($container)), $container->parameters['data_collector.templates'], ($container->privates['web_profiler.csp.handler'] ?? $container->load('getWebProfiler_Csp_HandlerService')), \dirname(__DIR__, 4));
    }
}
