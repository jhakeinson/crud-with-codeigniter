<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->library('custom_view');
		$this->load->model('project_model');
	}


	public function index()
	{
		$projects = $this->project_model->get_projects();

		$data = array(
			'projects' => $projects
		);

		$this->custom_view->render_view('Home', 'project_list', $data);
	}

	public function add_new_form()
	{
		$data = array(
			'edit_mode' => FALSE,
			'header_title' => 'Add new project',
			'types' => $this->project_model->get_project_types(),
			'statuses' => $this->project_model->get_project_statuses()
		);

		$this->custom_view->render_view('Home', 'form.php', $data);
	}

	public function edit_form($id)
	{
		$project = $this->project_model->get_project($id);
		$data = array(
			'edit_mode' => TRUE,
			'header_title' => 'Edit project',
			'id' => $id,
			'project' => $project[0],
			'types' => $this->project_model->get_project_types(),
			'statuses' => $this->project_model->get_project_statuses()
		);

		$this->custom_view->render_view('Home', 'form.php', $data);
	}
}
