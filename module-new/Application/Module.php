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

use Application\Model\ListingTable;
use Application\Model\Listing;
use Application\Model\homepagetable;
use Application\Model\homepagetableTable;
use Application\Model\templatestoretble;
use Application\Model\templatestoretbleTable;
use Application\Model\howsworkpagetble;
use Application\Model\howsworkpagetbleTable;
use Application\Model\howsworkstepstble;
use Application\Model\howsworkstepstbleTable;
use Application\Model\homepageslidertable;
use Application\Model\homepageslidertableTable;
use Application\Model\homepagewalloffame;
use Application\Model\homepagewalloffameTable;
use Application\Model\becomepublisher;
use Application\Model\becomepublisherTable;
use Application\Model\templateimages;
use Application\Model\templateimagesTable;
use Application\Model\becomepublisherbanner;
use Application\Model\becomepublisherbannerTable;
use Application\Model\casestudies;
use Application\Model\casestudiesTable;

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
             ///////////////////////////////////////////////
             'Application\Model\ListingTable' => function($sm) {
             $tableGateway = $sm->get('ListingTableGateway');
             $table = new ListingTable($tableGateway);
             return $table;
             },
            'ListingTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new Listing());
             return new TableGateway('listing', $dbAdapter, null, $resultSetPrototype);
             },  
              'Application\Model\homepagetableTable' => function($sm) {
             $tableGateway = $sm->get('homepagetableTableGateway');
             $table = new homepagetableTable($tableGateway);
             return $table;
             },
            'homepagetableTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new homepagetable());
             return new TableGateway('homepagetable', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\templatestoretbleTable' => function($sm) {
             $tableGateway = $sm->get('templatestoretbleTableGateway');
             $table = new templatestoretbleTable($tableGateway);
             return $table;
             },
            'templatestoretbleTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new templatestoretble());
             return new TableGateway('templatestoretble', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\howsworkpagetbleTable' => function($sm) {
             $tableGateway = $sm->get('howsworkpagetbleTableGateway');
             $table = new howsworkpagetbleTable($tableGateway);
             return $table;
             },
            'howsworkpagetbleTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new howsworkpagetble());
             return new TableGateway('howsworkpagetble', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\howsworkstepstbleTable' => function($sm) {
             $tableGateway = $sm->get('howsworkstepstbleTableGateway');
             $table = new howsworkstepstbleTable($tableGateway);
             return $table;
             },
            'howsworkstepstbleTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new howsworkstepstble());
             return new TableGateway('howsworkstepstble', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\homepageslidertableTable' => function($sm) {
             $tableGateway = $sm->get('homepageslidertableTableGateway');
             $table = new homepageslidertableTable($tableGateway);
             return $table;
             },
            'homepageslidertableTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new homepageslidertable());
             return new TableGateway('homepageslidertable', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\homepagewalloffameTable' => function($sm) {
             $tableGateway = $sm->get('homepagewalloffameTableGateway');
             $table = new homepagewalloffameTable($tableGateway);
             return $table;
             },
            'homepagewalloffameTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new homepagewalloffame());
             return new TableGateway('homepagewalloffame', $dbAdapter, null, $resultSetPrototype);
             },
            'Application\Model\becomepublisherTable' => function($sm) {
             $tableGateway = $sm->get('becomepublisherTableGateway');
             $table = new becomepublisherTable($tableGateway);
             return $table;
             },
            'becomepublisherTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new becomepublisher());
             return new TableGateway('becomepublisher', $dbAdapter, null, $resultSetPrototype);
             },
           'Application\Model\casestudiesTable' => function($sm) {
             $tableGateway = $sm->get('casestudiesTableGateway');
             $table = new casestudiesTable($tableGateway);
             return $table;
             },
            'casestudiesTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new casestudies());
             return new TableGateway('casestudies', $dbAdapter, null, $resultSetPrototype);
             },
           'Application\Model\templateimagesTable' => function($sm) {
             $tableGateway = $sm->get('templateimagesTableGateway');
             $table = new templateimagesTable($tableGateway);
             return $table;
             },
            'templateimagesTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new templateimages());
             return new TableGateway('templateimages', $dbAdapter, null, $resultSetPrototype);
             },
             ////////////////////////////////////////////////////////////////
             'Application\Model\becomepublisherbannerTable' => function($sm) {
             $tableGateway = $sm->get('becomepublisherbannerTableGateway');
             $table = new becomepublisherbannerTable($tableGateway);
             return $table;
             },
            'becomepublisherbannerTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new becomepublisherbanner());
             return new TableGateway('becomepublisherbanner', $dbAdapter, null, $resultSetPrototype);
             },
         ),
       );
    }
}
