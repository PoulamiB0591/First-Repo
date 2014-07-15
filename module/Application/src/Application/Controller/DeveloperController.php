 <?php
//Added by Poulami
namespace Application\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Model\Developer;
use Application\Model\Template;
use Application\Form\DForm;
use Application\Form\UploadForm;
use Zend\Session\Container;
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
    
    protected $developerTable,$templateTable; 

	
	public function indexAction()
	{
	   /*$error = (int) $this->params()->fromRoute('id');
       
       if($error)
       {
        echo "Please register to log in";
       }
       /*$title = 'Add a Developer';
       $this->headTitle($title);*/
       
		$dForm   = new DForm();
        return array('form'=> $dForm);
	}
    
    public function login1Action()
    {
        $dForm   = new DForm();
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            $uname = $request->getPost('uname');
            $pwd = $request->getPost('pwd');
            
            if($dForm->isValid())
            {
                //$developer->exchangeArray($dForm->getData());
                if($this->getDeveloperTable()->getDeveloper($uname,$pwd))
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
                }
                else
                {
                    $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'index','id'=>'0'));
                }
            }
        }
    }
    public function loginAction()
    {
    	/*$error = (int) $this->params()->fromRoute('id');
    	  
    	if($error)
    	{
    	echo "Please register to log in";
    	}
    	/*$title = 'Add a Developer';
    	$this->headTitle($title);*/
    	 
    	$dForm   = new DForm();
    	return array('form'=> $dForm);
    }
    public function dashboardAction() //added by Poulami
    {
        
        $user_session = new Container('devId');
        $id  = $user_session->devId; 
        
        $result = $this->getTemplateTable()->getTemplate($id);
        
        
        if($result['result'] == '1')
        {
            $this->redirect()->toRoute('application/default',array('controller'=>'template'));
        }
        else
        {
            return new ViewModel(array(
                    'templates' => $result['result'], 'count'=>$result['count']
                ));
        }
    }
    
    
    public function addAction() //edited by Poulami
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
                
                $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'dashboard'));
            }
        } 
    }
    
    public function getAction()
    {
        
      return new ViewModel(array(
            'developers' => $this->getDeveloperTable()->fetchAll(),
        ));
                
    }
    
    public function editAction() //added by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        //return array('developers'=> $this->getDeveloperTable()->getDeveloper($id));
        try{
            $developers = $this->getDeveloperTable()->getDeveloper($id); 
        }
        catch( \Exception $e)
        {
            return $this->redirect()->toRoute('applicaton/default',array('controller'=>'developer','action'=>'get'));
        }
        
        $dForm   = new DForm();
        $dForm -> bind($developers);
        $dForm -> get('submit') -> setValue('UPDATE');
        
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $developer = new Developer();
            $dForm->setData($request->getPost());
            
            if($dForm->isValid())
            {
                $this->getDeveloperTable()->saveDeveloper($developer);
            }
        }
        
        return array('form'=> $dForm);
           
    }
    
    public function deleteAction() //edited by Poulami
    {
        $id = (int) $this->params()->fromRoute('id');
        $this->getDeveloperTable()->delDeveloper($id);
        
        $this->redirect()->toRoute('application/default',array('controller'=>'developer','action'=>'get'));
        
    } 
    
    public function logoutAction() 
    {
        unset($_SESSION['devId']); 
        $this->redirect()->toRoute('application/default',array('controller'=>'developer'));
    }
         
    public function getDeveloperTable()
    {
        if (!$this->developerTable) {
         $sm = $this->getServiceLocator();
         $this->developerTable = $sm->get('Application\Model\DeveloperTable');
        }
        return $this->developerTable;
    }
    
    public function getTemplateTable()
    {
        if (!$this->templateTable) {
         $sm = $this->getServiceLocator();
         $this->templateTable = $sm->get('Application\Model\TemplateTable');
        }
        return $this->templateTable;
    }
    
}