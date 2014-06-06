<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Application\Model\Developer;
use Application\Model\DeveloperTable;
use Application\Model\Template;
use Application\Model\TemplateTable;
use Application\Model\Admin;
use Application\Model\AdminTable;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
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
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function getServiceConfig() //added by Poulami
    {
        
        return array(
         'factories' => array(
             'Application\Model\DeveloperTable' => function($sm) {
             $tableGateway = $sm->get('DeveloperTableGateway');
             $table = new DeveloperTable($tableGateway);
             return $table;
             },
            'DeveloperTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new Developer());
             return new TableGateway('developer', $dbAdapter, null, $resultSetPrototype);
             },
             
              'Application\Model\TemplateTable' => function($sm) {
             $tableGateway = $sm->get('TemplateTableGateway');
             $table = new TemplateTable($tableGateway);
             return $table;
             },
            'TemplateTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new Template());
             return new TableGateway('template', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\AdminTable' => function($sm) {
             $tableGateway = $sm->get('AdminTableGateway');
             $table = new AdminTable($tableGateway);
             return $table;
             },
            'AdminTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new Admin());
             return new TableGateway('admin', $dbAdapter, null, $resultSetPrototype);
             },
         ),
       );
    }
}
