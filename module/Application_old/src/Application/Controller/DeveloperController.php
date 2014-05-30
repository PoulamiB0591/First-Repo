<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Developer;
use Application\Form\DForm;
use Application\Form\UploadForm;

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
    
    protected $developerTable; 

	
	public function indexAction()
	{
	   
       /*$title = 'Add a Developer';
       $this->headTitle($title);*/
       
		$dForm   = new DForm();
        return array('form'=> $dForm);
	}
    
    public function addAction()
    {
        $dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $developer->exchangeArray($dForm->getData());
                $this->getDeveloperTable()->saveDeveloper($developer);
                
                return new ViewModel(array('results' => $developer));
               // return $this->redirect()->toRoute('application');
            }
        } 
    }
    
    public function deleteAction()
    {
        $id = (int) $this->params()->fromRoute('id');
        $this->getDeveloperTable()->delDeveloper($id);
    }
     public function getAction()
    {
      return new ViewModel(array(
            'developers' => $this->getDeveloperTable()->fetchAll(),
        ));
                
    }
    public function getDeveloperTable()
    {
     if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
     }
     return $this->developerTable;
    }
    
    public function uploadAction()
    {
             $form = new UploadForm();
       $view = new ViewModel(array('form'=>$form));
       $request = $this->getRequest();
       
       if ($request->isPost()) {
          
           $files =  $request->getFiles()->toArray();
           $fileName = $files['picture']['name'];
          // echo $fileName;
           $ffs = explode(".",$fileName);
        
          if($ffs[1] == "zip"){
//echo "hi";
           $uploadObj = new \Zend\File\Transfer\Adapter\Http(); 
           
           $uploadObj->setDestination(PUBLIC_PATH . '/files');
         
             if($uploadObj->receive($fileName)) {
                echo "<br>Uploaded Successfully";
           }
          
           }
           else
           {
            echo "Please upload zip file only";
           } 
       
       
        
       }
      
        $filter = new \Zend\Filter\Decompress(array(
                                    'adapter' => 'Zip',
                                    'options' => array(
                                    'target' => PUBLIC_PATH .'/files',
                                                        )
                                                        ));
       $decompressed = $filter->filter(PUBLIC_PATH . '/files/Smartfanpage AWS.zip'); 
        return $view;
    }
    
    
}