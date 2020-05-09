<?php
	function comboCategory($name,$array_data){
		$cb = '<select class="form-control" name="'.$name.'">';
		foreach($array_data as $row=>$key){
			$cb.='<option value="'.$key->CategoryID.'">'.$key->CategoryName.'</option>';
		}
		$cb .='</select>';
		echo $cb;
	}
	
	function categoryName($id){
		$CI = $get_instance();
$CI->load->model("Categories_model");
$data = $CI->Categories_model->get_by_id($id);
return $data->CategoryName;
		
	}
?>