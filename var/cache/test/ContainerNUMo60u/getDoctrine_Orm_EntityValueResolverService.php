<?php

namespace ContainerNUMo60u;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_EntityValueResolverService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.orm.entity_value_resolver' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'doctrine-bridge'.\DIRECTORY_SEPARATOR.'ArgumentResolver'.\DIRECTORY_SEPARATOR.'EntityValueResolver.php';

        return $container->privates['doctrine.orm.entity_value_resolver'] = new \Symfony\Bridge\Doctrine\ArgumentResolver\EntityValueResolver(($container->services['doctrine'] ?? self::getDoctrineService($container)), ($container->privates['doctrine.orm.entity_value_resolver.expression_language'] ??= new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()));
    }
}
