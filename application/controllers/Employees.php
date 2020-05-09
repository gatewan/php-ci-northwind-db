<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Employees_model','CM');        
    }

    public function index()
	{   	    
		$data['title'] = 'Data Employees';			
        $this->my_template->loadAdmin('employees/employees',$data);		
	}
        
    public function ajax_list()
	{
		$list = $this->CM->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $employees) {
			$no++;
			$row = array();
			$row[] = $employees->EmployeeID;
			$row[] = $employees->FirstName;
			$row[] = $employees->LastName;
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_employees('."'".$employees->EmployeeID."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
					  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_employees('."'".$employees->EmployeeID."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
		
			$data[] = $row;
		}

		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->CM->count_all(),
						"recordsFiltered" => $this->CM->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}


    public function ajax_edit($id)
	{
		$data = $this->CM->get_by_id($id);		
		echo json_encode($data);
	}

	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'FirstName' => $this->input->post('FirstName'),
				'LastName' => $this->input->post('LastName')
			);
		$insert = $this->CM->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'FirstName' => $this->input->post('FirstName'),
				'LastName' => $this->input->post('LastName')
			);
		$this->CM->update(array('EmployeeID' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->CM->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('FirstName') == '')
		{
			$data['inputerror'][] = 'FirstName';
			$data['error_string'][] = 'Employees Name is required';
			$data['status'] = FALSE;
		}

		if($this->input->post('LastName') == '')
		{
			$data['inputerror'][] = 'LastName';
			$data['error_string'][] = 'LastName is required';
			$data['status'] = FALSE;
		}


		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */