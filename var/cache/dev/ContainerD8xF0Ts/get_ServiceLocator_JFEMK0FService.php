<?php

namespace ContainerD8xF0Ts;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JFEMK0FService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JFEMK0F' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JFEMK0F'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'userRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'userRepository' => 'App\\Repository\\UsersRepository',
        ]);
    }
}
