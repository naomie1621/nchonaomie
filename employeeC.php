<?php
class EmployeeController {
    public function construct(){}
    
    public function list(){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      $employees=$m->listAll();
      // Affichage au sein de la vue des données récupérées via le model
      require_once CLASSES.DS.'view.php';
      $v=new View();
      $v->setVar('employeelist',$employees);
      $v->render('employee','list');
    }

    public function view($id=null){
      require_once MODELS.DS.'employeeM.php';
      $m=New EmployeeModel();
      require_once CLASSES.DS.'view.php';
      $v=new View();
      if ($employee=$m->listOne($id)) $v->setVar('e',$employee);
      // Affichage au sein de la vue des données récupérées via le model
      $v->render('employee','view');
    }


//fonction pour ajouter
      public function add(){
        // $EmployeeID, $NationalIDNumber, $ContactID,$Title, $BirthDate, $Gender, $HireDate
       require_once CLASSES.DS.'view.php';
        $v=new View();     
        if (isset($_POST["EmployeeID"]))
        {
            require_once MODELS.DS.'employeeM.php';
            $employeeModel =new employeeModel();
            $employee=$employeeModel;
            if ($employeeModel->add($_POST["EmployeeID"], $_POST["ContactID"], $_POST["NationalIDNumber"], $_POST["Title"], $_POST["BirthDate"],$_POST["Gender"],$_POST["HireDate"]))
            {
                return $this->list();
            }
        }
        else   
            
        $v->render('employee','add');
    }

//fonction editer    
    
    public function edit($id){
        require_once MODELS.DS.'employeeM.php';
        $employeeModel =new employeeModel();
        $employee=$employeeModel->listOne($id);
       require_once CLASSES.DS.'view.php';
        $v=new View();
        if (isset($_POST["EmployeeID"]))
        {
                if($employeeModel->edit($_POST["EmployeeID"], $_POST["ContactID"],$_POST["NationalIDNumber"], $_POST["Title"], $_POST["BirthDate"],$_POST["Gender"],$_POST["HireDate"]))
                {
                    return $this->list();
                }
        }
        else 
         { 
        $v->setVar('employee',$employee);
       $v->render('employee','edit');
     }
    }


    // public function delete($id=null){
    //   require_once MODELS.DS.'employeeM.php';
    //   $m=New EmployeeModel();
    //   // Affichage au sein de la vue des données récupérées via le model
    //   require_once CLASSES.DS.'view.php';
    //   $v=new View();
    //   $employee=$m->delete($id);
    //    $v->setVar('employeelist',$employee);
    //   // Affichage au sein de la vue des données récupérées via le model
    //   $v->render('employee','delete');

    //   // die('suppression d\'un employé');

    // }
     public function delete($id){
        require_once MODELS.DS.'employeeM.php';
        $employeeModel =new employeeModel();
        if($employeeModel->delete($id))
        {
            return $this->list();
        }
    }

}
?>