<?php defined('SYSPATH') OR die('No Direct Script Access');

Class Model_Employee extends Kohana_Model
{
    public function add($page_data){
        $result = DB::insert('employee',array_keys($page_data))
                    ->values($page_data)
                    ->execute();        

        return $result;
    }
    
	public function getList()
	{
		$result = DB::select('*')
					->from('employee')
					->execute()
			->as_array();
        
		return $result;
	}    


	public function delete($id)
	{
		$result = DB::delete('employee')
					->where('id', '=', $id)
					->execute();       
	}
	
	public function get($id){
		$result = DB::select('*')
					->from('employee')
					->where('id', '=', $id)
					->execute()
					->current();
        
		return $result;
	}
	
	public function update($id,$employee){
		$result = DB::update('employee')
					->set($employee)
					->where('id', '=', $id)
					->execute();
        
		return $result;
	}
	
}
?>
