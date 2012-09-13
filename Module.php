<?php

namespace Sunrise;

use Zend\Mvc\ModuleRouteListener;
//use Album\Model\AlbumTable;

class Module
{
    public function onBootstrap($e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            // 'factories' => array(
            //     'Album\Model\AlbumTable' =>  function($sm) {
            //         $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
            //         $table     = new AlbumTable($dbAdapter);
            //         return $table;
            //     },
            // ),
        );
    }
}
