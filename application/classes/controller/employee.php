<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Employee extends Controller_Base {

	public function before(){
		parent::before();        
	}
	
	public function action_index(){
		$modelEmployee = new Model_Employee();
		$employee = $modelEmployee->getList();
		$this->template->content= View::factory('employee/index')
                                    ->set('employee',$employee);
	}    
	
	 public function action_add(){
        $modelEmployee = new Model_Employee();
        if($this->request->post()){
            $validate = $this->checkEmployee($_POST);
       
            if($validate->check()){
                 $modelEmployee->add($_POST);
                 $success = "Pracownik został dodany";
            }else{                
                $error = $validate->errors('msg');
            }            
        }
        $this->template->content = View::factory('employee/add')
                                   ->bind('success',$success)
                                   ->bind('error',$error);
    }    

	public function action_edit(){ 
		$id = $this->request->param('id');
		$modelEmployee = new Model_Employee();
		$employee = $modelEmployee->get($id);
        
		if($this->request->post()){
			$validate = $this->checkEmployee($_POST);

			if($validate->check()){
				$modelEmployee->update($id,$_POST);
				$success = "Pracownik został poprawnie zmieniony";
			}else{
				$error = $validate->errors('msg');
			}
			$employee=$_POST;
		}
     
		$this->template->content = View::factory('employee/edit')
									->set('employee',$employee) 
									->bind('success',$success)
									->bind('error',$error);      
	} 
    
	public function checkEmployee($POST){
		$validate = new Validation($POST); 
		
		$validate->rule('imie', 'not_empty') 
				->rule('nazwisko', 'not_empty')
				->rule('stanowisko', 'not_empty')
				->rule('pesel', 'not_empty')
				->rule('pesel', 'numeric')
				->rule('pesel','min_length', array(':value', '11'))
				->rule('pesel','max_length', array(':value', '11'));

	return $validate; //zwracamy cały obiekt walidacji
	}

	public function action_delete(){     
		$id = $this->request->param('id');  //pobieramy id filmu do usunięcia
		$modelEmployee = new Model_Employee();  //tworzymy model
		$modelEmployee->delete($id);  //wywołujemy wcześniej przygotowaną funkcję do usunięcia filmu 
		$this->request->redirect('employee/index'); //po usunięciu robimy przekierowanie do listy filmów na akcję index
	}   	

	public function after(){        
		parent::after();
	}    
}
