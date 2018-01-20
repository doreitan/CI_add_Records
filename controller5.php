<?php

Class Controller5 extends CI_controller
{
		public function index()
		{
			//what wil happen if query returns nothing
			$my_Array=array();
			
			$this->load->view("view5");
			
			if ($mysql=$this->model5->get_records())// if everythings ok...
				{
					$my_Array["records"]=$mysql;
					$this->load->view("view5", $my_Array);
				}
		}
	
	
		public function create()//what will happen when we press submit
		{
			//actually adding records to the table, transfering from form to variables
			$my_Array=array(
							"firstname" =>$this->input->post("firstName"), 
							"email"=>$this->input->post("email")
							);
			
			$this->model5->add_records($my_Array);
			$this->index();
					
		}
	
	
	
}