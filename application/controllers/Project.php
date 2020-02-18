<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

    function __construct()
	{
        parent::__construct();

		$this->load->library('custom_view');
        $this->load->model('project_model');
    }

	public function add_project()
	{

		$data = $this->input->post();

		$affected_rows = $this->project_model->add_project($data);

		if($affected_rows > 0) {
			redirect('/');
		} else {
			$message = "Sorry, something went wrong. Try again.";
			$status_code = 500;
			show_error($message, $status_code, $heading = 'An Error Was Encountered');
		}
	}

	public function edit_project($id)
	{
		$data = $this->input->post();

		$affected_rows = $this->project_model->update_project($id, $data);

		if($affected_rows > 0) {
			redirect('/');
		} else {
			$message = "Sorry, something went wrong. Try again.";
			$status_code = 500;
			show_error($message, $status_code, $heading = 'An Error Was Encountered');
		}
	}

	public function delete_project($id)
	{
		$affected_rows = $this->project_model->delete_project($id);

		if($affected_rows > 0) {
			redirect('/');
		} else {
			$message = "Sorry, something went wrong. Try again.";
			$status_code = 500;
			show_error($message, $status_code, $heading = 'An Error Was Encountered');
		}
	}
}
