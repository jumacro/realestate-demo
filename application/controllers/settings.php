<?php
class settings extends CI_Controller {
	public function  __construct()  {
 		parent::__construct();
		$this->load->library('grocery_CRUD');
			$this->load->library('image_CRUD');
    }
	
	 public function _abt_output($output = null)
	{

		$this->load->view('real-estate-dashboard',$output);	
	}
	
	public function propertydata()
	{
		$crud = new grocery_CRUD();
        $crud->set_theme('flexigrid');
		$crud->set_table('property_details');
			
		$crud->set_field_upload('property_image','assets/propertyimageuploads');
	    $crud->unset_columns('id');
		  $crud->add_action('Add/Edit Maintanance Dates', 'http://localhost/realestate/calendar.png', 'settings/maintanance','ui-icon-plus');

		$output = $crud->render();
		$output->msg = 'Properties Details';
		$this->_abt_output($output);

	}
	public function bookingdata()
	{
		$crud = new grocery_CRUD();
        $crud->set_theme('flexigrid');
		$crud->set_table('booking_details');
			
		//$crud->set_field_upload('profile_image','assets/propertyimageuploads');
	    $crud->unset_columns('id');
		$crud->add_action('Add/Edit Gallery Image', 'http://localhost/trivium/person.png', 'settings/women_gallery_images','ui-icon-plus');

		$output = $crud->render();
		$output->msg = 'Booking Details';
		$this->_abt_output($output);

	}
	
	function _examplee_output($output = null)
	{
		$this->load->view('property-list-admin.php',$output);	
	}
	
	function maintanance()
	{
$id=$this->uri->segment(3);

	$crud = new grocery_CRUD();
        $crud->set_theme('flexigrid');
		$crud->set_table('maintanance_details');
		$crud->where('property_id',$id);
			$crud->field_type('property_id','hidden',$id);
		$crud->set_relation('property_id','property_details','title');
		$output = $crud->render();
		$output->msg = 'Maintance Details';
		$this->_abt_output($output);
	}


}