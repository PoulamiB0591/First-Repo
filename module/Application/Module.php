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
use Application\Model\indexusPage;
use Application\Model\indexusPageTable;
use Application\Model\indexustable;
use Application\Model\indexustableTable;
use Application\Model\userTemplateDetails;
use Application\Model\userTemplateDetailsTable;
use Application\Model\Template;
use Application\Model\TemplateTable;
use Application\Model\Admin;
use Application\Model\AdminTable;
use Application\Model\Image;
use Application\Model\ImageTable;
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
use Application\Model\fbuser;
use Application\Model\fbuserTable;
use Application\Model\facebookApps;
use Application\Model\facebookAppsTable;
use Application\Model\faqpages;
use Application\Model\faqpagesTable;
use Application\Model\faqContainer;
use Application\Model\faqContainerTable;
use Application\Model\faqbanner;
use Application\Model\faqbannerTable;
use Application\Model\contactheader;
use Application\Model\contactheaderTable;
use Application\Model\address;
use Application\Model\addressTable;
use Application\Model\promote;
use Application\Model\promoteTable;
use Application\Model\screenshots;
use Application\Model\screenshotsTable;
use Application\Model\createapp;
use Application\Model\createappTable;
use Application\Model\userTemplate;
use Application\Model\userTemplateTable;
use Application\Model\becomepublisherstudio;
use Application\Model\becomepublisherstudioTable;
use Application\Model\contact;
use Application\Model\blogoverviewHeaderTable;
use Application\Model\blogoverviewHeader;
use Application\Model\blogarchiveHeaderTable;
use Application\Model\blogarchiveHeader;
use Application\Model\contactTable;
use Application\Model\invfriends1505052056407910;
use Application\Model\invfriends1505052056407910Table;
use Application\Model\blogdetailss;
use Application\Model\blogdetailssTable;
use Application\Model\blogoverview;
use Application\Model\blogoverviewTable;
use Application\Model\blog;
use Application\Model\blogTable;
use Application\Model\privacypolicy;
use Application\Model\privacypolicyTable;
use Application\Model\disclaimer;
use Application\Model\disclaimerTable;
use Application\Model\transactionDetails;
use Application\Model\transactionDetailsTable;
use Application\Model\termsservice;
use Application\Model\termsserviceTable;
use Application\Model\publisher;
use Application\Model\publisherTable;
use Application\Model\userComment;
use Application\Model\userCommentTable;
use Application\Model\rating;
use Application\Model\ratingTable;
use Application\Model\formreport;
use Application\Model\formreportTable;
use Application\Model\appImageLink;
use Application\Model\appImageLinkTable;
use Application\Model\animatedImage;
use Application\Model\animatedImageTable;
use Application\Model\aboutUsHeader;
use Application\Model\aboutUsHeaderTable;
use Application\Model\aboutUsImages;
use Application\Model\aboutUsImagesTable;
use Application\Model\blogDetailsHeader;
use Application\Model\blogDetailsHeaderTable;
use Application\Model\userDetails;
use Application\Model\userDetailsTable;
use Application\Model\companyDetails;
use Application\Model\companyDetailsTable;
use Application\Model\countryDetails;
use Application\Model\countryDetailsTable;
use Application\Model\accessCode;
use Application\Model\accessCodeTable;
use Application\Model\requestemail;
use Application\Model\requestemailTable;
use Application\Model\templateCatagoryTable;
use Application\Model\templateCatagory;
use Application\Model\pagesheaderTable;
use Application\Model\pagesheader;
use Application\Model\imagesAboutUsTable;
use Application\Model\imagesAboutUs;
use Application\Model\privacypolicydeveloperTable;
use Application\Model\privacypolicydeveloper;
use Application\Model\developerpagesheaderTable;
use Application\Model\developerpagesheader;
use Application\Model\developertermsserviceTable;
use Application\Model\developertermsservice;
use Application\Model\developerdisclaimerTable;
use Application\Model\developerdisclaimer;
use Application\Model\shippingDetails;
use Application\Model\shippingDetailsTable;
use Application\Model\orderId;
use Application\Model\orderIdTable;

use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $eventManager->attach('dispatch', array($this, 'loadConfiguration' ), MvcEvent::EVENT_DISPATCH_ERROR, function($e) {
             $result = $e->getResult();
             $result->setTerminal(TRUE); },100);
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }
    public function loadConfiguration(MvcEvent $e)
    {
    	$sm  = $e->getApplication()->getServiceManager();
    	 
    	$controller = $e->getRouteMatch()->getParam('controller');
    	if (0 !== strpos($controller, __NAMESPACE__, 0)) {
    		//if not this module
    		return;
    	}
    	 
    	//if this module
    	$exceptionstrategy = $sm->get('ViewManager')->getExceptionStrategy();
    	$exceptionstrategy->setExceptionTemplate('error/index');
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
             
             
              'Application\Model\ImageTable' => function($sm) {
             $tableGateway = $sm->get('ImageTableGateway');
             $table = new ImageTable($tableGateway);
             return $table;
             },
            'ImageTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new Image());
             return new TableGateway('image', $dbAdapter, null, $resultSetPrototype);
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
             
             'Application\Model\fbuserTable' => function($sm) {
             $tableGateway = $sm->get('fbuserTableGateway');
             $table = new fbuserTable($tableGateway);
             return $table;
             },
            'fbuserTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new fbuser());
             return new TableGateway('fbuser', $dbAdapter, null, $resultSetPrototype);
             },
             
             
             'Application\Model\facebookAppsTable' => function($sm) {
             $tableGateway = $sm->get('facebookAppsTableGateway');
             $table = new facebookAppsTable($tableGateway);
             return $table;
             },
            'facebookAppsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new facebookApps());
             return new TableGateway('facebookApps', $dbAdapter, null, $resultSetPrototype);
             },
             
             
             'Application\Model\faqbannerTable' => function($sm) {
             $tableGateway = $sm->get('faqbannerTableGateway');
             $table = new faqbannerTable($tableGateway);
             return $table;
             },
            'faqbannerTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new faqbanner());
             return new TableGateway('faqbanner', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\faqpagesTable' => function($sm) {
             $tableGateway = $sm->get('faqpagesTableGateway');
             $table = new faqpagesTable($tableGateway);
             return $table;
             },
             'faqpagesTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new faqpages());
             return new TableGateway('faqpages', $dbAdapter, null, $resultSetPrototype);
             },
             
            
             
             
             
             'Application\Model\contactheaderTable' => function($sm) {
             $tableGateway = $sm->get('contactheaderTableGateway');
             $table = new contactheaderTable($tableGateway);
             return $table;
             },
             'contactheaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new contactheader());
             return new TableGateway('contactheader', $dbAdapter, null, $resultSetPrototype);
             }, 
             'Application\Model\addressTable' => function($sm) {
             $tableGateway = $sm->get('addressTableGateway');
             $table = new addressTable($tableGateway);
             return $table;
             },
             'addressTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new address());
             return new TableGateway('address', $dbAdapter, null, $resultSetPrototype);
             },  
             'Application\Model\becomepublisherstudioTable' => function($sm) {
             $tableGateway = $sm->get('becomepublisherstudioTableGateway');
             $table = new becomepublisherstudioTable($tableGateway);
             return $table;
             },
             'becomepublisherstudioTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new becomepublisherstudio());
             return new TableGateway('becomepublisherstudio', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\contactTable' => function($sm) {
             $tableGateway = $sm->get('contactTableGateway');
             $table = new contactTable($tableGateway);
             return $table;
             },
             'contactTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new contact());
             return new TableGateway('contact', $dbAdapter, null, $resultSetPrototype);
             },  
              'Application\Model\userTemplateTable' => function($sm) {
             $tableGateway = $sm->get('userTemplateTableGateway');
             $table = new userTemplateTable($tableGateway);
             return $table;
             },
             'userTemplateTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new userTemplate());
             return new TableGateway('userTemplate', $dbAdapter, null, $resultSetPrototype);
             }, 
              'Application\Model\createappTable' => function($sm) {
             $tableGateway = $sm->get('createappTableGateway');
             $table = new createappTable($tableGateway);
             return $table;
             },
             'createappTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new createapp());
             return new TableGateway('createapp', $dbAdapter, null, $resultSetPrototype);
             }, 
             'Application\Model\invfriends1505052056407910Table' => function($sm) {
             $tableGateway = $sm->get('invfriends1505052056407910TableGateway');
             $table = new invfriends1505052056407910Table($tableGateway);
             return $table;
             },
             'invfriends1505052056407910TableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new invfriends1505052056407910());
             return new TableGateway('invfriends1505052056407910', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\screenshotsTable' => function($sm) {
             $tableGateway = $sm->get('screenshotsTableGateway');
             $table = new screenshotsTable($tableGateway);
             return $table;
             },
             'screenshotsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new screenshots());
             return new TableGateway('screenshots', $dbAdapter, null, $resultSetPrototype);
             }, 
             'Application\Model\promoteTable' => function($sm) {
             $tableGateway = $sm->get('promoteTableGateway');
             $table = new promoteTable($tableGateway);
             return $table;
             },
             'promoteTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new promote());
             return new TableGateway('promote', $dbAdapter, null, $resultSetPrototype);
             },
            /**
 *  'Application\Model\blogdetailsTable' => function($sm) {
 *              $tableGateway = $sm->get('blogdetailsTableGateway');
 *              $table = new blogdetailsTable($tableGateway);
 *              return $table;
 *              },
 *              'blogdetailsTableGateway' => function ($sm) {
 *              $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
 *              $resultSetPrototype = new ResultSet();
 *              $resultSetPrototype->setArrayObjectPrototype(new blogdetails());
 *              return new TableGateway('blogdetails', $dbAdapter, null, $resultSetPrototype);
 *              },
 * 
 */
 
 
             'Application\Model\blogoverviewHeaderTable' => function($sm) {
             $tableGateway = $sm->get('blogoverviewHeaderTableGateway');
             $table = new blogoverviewHeaderTable($tableGateway);
             return $table;
             },
             'blogoverviewHeaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new blogoverviewHeader());
             return new TableGateway('blogoverviewHeader', $dbAdapter, null, $resultSetPrototype);
             }, 
             'Application\Model\blogoverviewTable' => function($sm) {
             $tableGateway = $sm->get('blogoverviewTableGateway');
             $table = new blogoverviewTable($tableGateway);
             return $table;
             },
             'blogoverviewTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new blogoverview());
             return new TableGateway('blogoverview', $dbAdapter, null, $resultSetPrototype);
             }, 
              
             'Application\Model\blogarchiveHeaderTable' => function($sm) {
             $tableGateway = $sm->get('blogarchiveHeaderTableGateway');
             $table = new blogarchiveHeaderTable($tableGateway);
             return $table;
             },
             'blogarchiveHeaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new blogarchiveHeader());
             return new TableGateway('blogarchiveHeader', $dbAdapter, null, $resultSetPrototype);
             },  
             'Application\Model\blogTable' => function($sm) {
             $tableGateway = $sm->get('blogTableGateway');
             $table = new blogTable($tableGateway);
             return $table;
             },
             'blogTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new blog());
             return new TableGateway('blog', $dbAdapter, null, $resultSetPrototype);
             },                          
             'Application\Model\blogdetailssTable' => function($sm) {
             $tableGateway = $sm->get('blogdetailssTableGateway');
             $table = new blogdetailssTable($tableGateway);
             return $table;
             },
             'blogdetailssTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new blogdetailss());
             return new TableGateway('blogdetailss', $dbAdapter, null, $resultSetPrototype);
             }, 
              'Application\Model\termsserviceTable' => function($sm) {
             $tableGateway = $sm->get('termsserviceTableGateway');
             $table = new termsserviceTable($tableGateway);
             return $table;
             },
             'termsserviceTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new termsservice());
             return new TableGateway('termsservice', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\privacypolicyTable' => function($sm) {
             $tableGateway = $sm->get('privacypolicyTableGateway');
             $table = new privacypolicyTable($tableGateway);
             return $table;
             },
             'privacypolicyTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new privacypolicy());
             return new TableGateway('privacypolicy', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\disclaimerTable' => function($sm) {
             $tableGateway = $sm->get('disclaimerTableGateway');
             $table = new disclaimerTable($tableGateway);
             return $table;
             },
             'disclaimerTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new disclaimer());
             return new TableGateway('disclaimer', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\publisherTable' => function($sm) {
             $tableGateway = $sm->get('publisherTableGateway');
             $table = new publisherTable($tableGateway);
             return $table;
             },
             'publisherTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new publisher());
             return new TableGateway('publisher', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\userCommentTable' => function($sm) {
             $tableGateway = $sm->get('userCommentTableGateway');
             $table = new userCommentTable($tableGateway);
             return $table;
             },
             'userCommentTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new userComment());
             return new TableGateway('userComment', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\ratingTable' => function($sm) {
             $tableGateway = $sm->get('ratingTableGateway');
             $table = new ratingTable($tableGateway);
             return $table;
             },
             'ratingTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new rating());
             return new TableGateway('rating', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\indexustableTable' => function($sm) {
             $tableGateway = $sm->get('indexustableTableGateway');
             $table = new indexustableTable($tableGateway);
             return $table;
             },
             'indexustableTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new indexustable());
             return new TableGateway('indexustable', $dbAdapter, null, $resultSetPrototype);
             }, 
             
             'Application\Model\indexusPageTable' => function($sm) {
             $tableGateway = $sm->get('indexusPageTableGateway');
             $table = new indexusPageTable($tableGateway);
             return $table;
             },
             'indexusPageTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new indexusPage());
             return new TableGateway('indexusPage', $dbAdapter, null, $resultSetPrototype);
             },
             
              'Application\Model\formreportTable' => function($sm) {
             $tableGateway = $sm->get('formreportTableGateway');
             $table = new formreportTable($tableGateway);
             return $table;
             },
             'formreportTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new formreport());
             return new TableGateway('formreport', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\aboutUsHeaderTable' => function($sm) {
             $tableGateway = $sm->get('aboutUsHeaderTableGateway');
             $table = new aboutUsHeaderTable($tableGateway);
             return $table;
             },
             'aboutUsHeaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new aboutUsHeader());
             return new TableGateway('aboutUsHeader', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\aboutUsImagesTable' => function($sm) {
             $tableGateway = $sm->get('aboutUsImagesTableGateway');
             $table = new aboutUsImagesTable($tableGateway);
             return $table;
             },
             'aboutUsImagesTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new aboutUsImages());
             return new TableGateway('aboutUsImages', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\userTemplateDetailsTable' => function($sm) {
             $tableGateway = $sm->get('userTemplateDetailsTableGateway');
             $table = new userTemplateDetailsTable($tableGateway);
             return $table;
             },
             'userTemplateDetailsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new userTemplateDetails());
             return new TableGateway('userTemplateDetails', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\blogDetailsHeaderTable' => function($sm) {
             $tableGateway = $sm->get('blogDetailsHeaderTableGateway');
             $table = new blogDetailsHeaderTable($tableGateway);
             return $table;
             },
             'blogDetailsHeaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new blogDetailsHeader());
             return new TableGateway('blogDetailsHeader', $dbAdapter, null, $resultSetPrototype);
             },
            'Application\Model\userDetailsTable' => function($sm) {
             $tableGateway = $sm->get('userDetailsTableGateway');
             $table = new userDetailsTable($tableGateway);
             return $table;
             },
             'userDetailsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new userDetails());
             return new TableGateway('userDetails', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\faqContainerTable' => function($sm) {
             $tableGateway = $sm->get('faqContainerTableGateway');
             $table = new faqContainerTable($tableGateway);
             return $table;
             },
             'faqContainerTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new faqContainer());
             return new TableGateway('faqContainer', $dbAdapter, null, $resultSetPrototype);
             },
            'Application\Model\appImageLinkTable' => function($sm) {
             $tableGateway = $sm->get('appImageLinkTableGateway');
             $table = new appImageLinkTable($tableGateway);
             return $table;
             },
             'appImageLinkTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new appImageLink());
             return new TableGateway('appImageLink', $dbAdapter, null, $resultSetPrototype);
             },             
             'Application\Model\animatedImageTable' => function($sm) {
             $tableGateway = $sm->get('animatedImageTableGateway');
             $table = new animatedImageTable($tableGateway);
             return $table;
             },
             'animatedImageTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new animatedImage());
             return new TableGateway('animatedImage', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\companyDetailsTable' => function($sm) {
             $tableGateway = $sm->get('companyDetailsTableGateway');
             $table = new companyDetailsTable($tableGateway);
             return $table;
             },
             'companyDetailsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new companyDetails());
             return new TableGateway('companyDetails', $dbAdapter, null, $resultSetPrototype);
             },

             'Application\Model\countryDetailsTable' => function($sm) {
             $tableGateway = $sm->get('countryDetailsTableGateway');
             $table = new countryDetailsTable($tableGateway);
             return $table;
             },
             'countryDetailsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new countryDetails());
             return new TableGateway('countryDetails', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\accessCodeTable' => function($sm) {
             $tableGateway = $sm->get('accessCodeTableGateway');
             $table = new accessCodeTable($tableGateway);
             return $table;
             },
             'accessCodeTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new accessCode());
             return new TableGateway('accessCode', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\requestemailTable' => function($sm) {
             $tableGateway = $sm->get('requestemailTableGateway');
             $table = new requestemailTable($tableGateway);
             return $table;
             },
             'requestemailTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new requestemail());
             return new TableGateway('requestemail', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\templateCatagoryTable' => function($sm) {
             $tableGateway = $sm->get('templateCatagoryTableGateway');
             $table = new templateCatagoryTable($tableGateway);
             return $table;
             },
             'templateCatagoryTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new templateCatagory());
             return new TableGateway('templateCatagory', $dbAdapter, null, $resultSetPrototype);
             },
             
             'Application\Model\pagesheaderTable' => function($sm) {
             $tableGateway = $sm->get('pagesheaderTableGateway');
             $table = new pagesheaderTable($tableGateway);
             return $table;
             },
             'pagesheaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new pagesheader());
             return new TableGateway('pagesheader', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\developerpagesheaderTable' => function($sm) {
             $tableGateway = $sm->get('developerpagesheaderTableGateway');
             $table = new developerpagesheaderTable($tableGateway);
             return $table;
             },
             'developerpagesheaderTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new developerpagesheader());
             return new TableGateway('developerpagesheader', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\imagesAboutUsTable' => function($sm) {
             $tableGateway = $sm->get('imagesAboutUsTableGateway');
             $table = new imagesAboutUsTable($tableGateway);
             return $table;
             },
             'imagesAboutUsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new imagesAboutUs());
             return new TableGateway('imagesAboutUs', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\developertermsserviceTable' => function($sm) {
             $tableGateway = $sm->get('developertermsserviceTableGateway');
             $table = new developertermsserviceTable($tableGateway);
             return $table;
             },
             'developertermsserviceTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new developertermsservice());
             return new TableGateway('developertermsservice', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\developerdisclaimerTable' => function($sm) {
             $tableGateway = $sm->get('developerdisclaimerTableGateway');
             $table = new developerdisclaimerTable($tableGateway);
             return $table;
             },
             'developerdisclaimerTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new developerdisclaimer());
             return new TableGateway('developerdisclaimer', $dbAdapter, null, $resultSetPrototype);
             },
             'Application\Model\privacypolicydeveloperTable' => function($sm) {
             $tableGateway = $sm->get('privacypolicydeveloperTableGateway');
             $table = new privacypolicydeveloperTable($tableGateway);
             return $table;
             },
             'privacypolicydeveloperTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new privacypolicydeveloper());
             return new TableGateway('privacypolicydeveloper', $dbAdapter, null, $resultSetPrototype);
             },
             
             /******** for shippingDetails table ***********/
           
             'Application\Model\shippingDetailsTable' => function($sm) {
             $tableGateway = $sm->get('shippingDetailsTableGateway');
             $table = new shippingDetailsTable($tableGateway);
             return $table;
             },
             'shippingDetailsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new shippingDetails());
             return new TableGateway('shippingDetails', $dbAdapter, null, $resultSetPrototype);
             },
             
             /******** generate  order id ********/
             'Application\Model\orderIdTable' => function($sm) {
             $tableGateway = $sm->get('orderIdTableGateway');
             $table = new orderIdTable($tableGateway);
             return $table;
             },
             'orderIdTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new orderId());
             return new TableGateway('orderId', $dbAdapter, null, $resultSetPrototype);
             },
             
             /******** save  transaction details ********/
             'Application\Model\transactionDetailsTable' => function($sm) {
             $tableGateway = $sm->get('transactionDetailsTableGateway');
             $table = new transactionDetailsTable($tableGateway);
             return $table;
             },
             'transactionDetailsTableGateway' => function ($sm) {
             $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
             $resultSetPrototype = new ResultSet();
             $resultSetPrototype->setArrayObjectPrototype(new transactionDetails());
             return new TableGateway('transactionDetails', $dbAdapter, null, $resultSetPrototype);
             },
         ),
         
       );
    }
}
