<?php

namespace ContainerXFZmAlX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Command_DebugService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'asset_mapper.command.debug' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DebugAssetMapperCommand.php';

        $container->privates['asset_mapper.command.debug'] = $instance = new \Symfony\Component\AssetMapper\Command\DebugAssetMapperCommand(($container->privates['asset_mapper'] ?? self::getAssetMapperService($container)), ($container->privates['asset_mapper.repository'] ??= new \Symfony\Component\AssetMapper\AssetMapperRepository([(\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'ux-turbo'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection/../../assets/dist') => '@symfony/ux-turbo', (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'stimulus-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection/../../assets/dist') => '@symfony/stimulus-bundle', 'assets/' => ''], \dirname(__DIR__, 4), ['#^(?=[^\\.]).*\\.d\\.ts$#', '#^(?=[^\\.]).*.*/(?=[^\\.])controllers\\.json$#'])), \dirname(__DIR__, 4));

        $instance->setName('debug:asset-map');
        $instance->setDescription('Outputs all mapped assets.');

        return $instance;
    }
}
