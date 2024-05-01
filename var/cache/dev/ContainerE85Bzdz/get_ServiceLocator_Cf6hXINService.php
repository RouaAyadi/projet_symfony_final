<?php

namespace ContainerE85Bzdz;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cf6hXINService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cf6hXIN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cf6hXIN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\UserController::addUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController::deleteUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController::editUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController::findby' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController::updateUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController::userspage' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\UserController:addUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController:deleteUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController:editUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController:findby' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController:updateUser' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\UserController:userspage' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\UserController::addUser' => '?',
            'App\\Controller\\UserController::deleteUser' => '?',
            'App\\Controller\\UserController::editUser' => '?',
            'App\\Controller\\UserController::findby' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::updateUser' => '?',
            'App\\Controller\\UserController::userspage' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\UserController:addUser' => '?',
            'App\\Controller\\UserController:deleteUser' => '?',
            'App\\Controller\\UserController:editUser' => '?',
            'App\\Controller\\UserController:findby' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:updateUser' => '?',
            'App\\Controller\\UserController:userspage' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
