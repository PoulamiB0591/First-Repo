<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * DeveloperController
 *
 * @author
 *
 * @version
 *
 */
class DeveloperController extends AbstractActionController {
	/**
	 * The default action - show the home page
	 */
	public function indexAction() {
		// TODO Auto-generated DeveloperController::indexAction() default action
		return new ViewModel ();
	} 
	
	public function saveAction()
	{
		
	}
}