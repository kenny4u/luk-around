<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() 
    {
		parent::__construct();
		$this->load->model('admin_model');
    }

	public function index()
	{
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function dashboard()
	{
		$this->load->view('dashboard');
	}

	public function create_event()
	{
		if($this->input->post())
		{
			$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
					'start_date' => $this->input->post('start_date'),
					'end_date' => $this->input->post('end_date'),
				);
			$this->admin_model->insert_event($data);
			$data['msg'] = 'Event successfully added';
			$this->load->view('create_event',$data);
		}
		else
		{
			$this->load->view('create_event');	
		}
	}

	function create_ad()
	{
		if($this->input->post())
		{
			$data = array(
					'title' => $this->input->post('title'),
					'content' => $this->input->post('content'),
				);
			$this->admin_model->insert_ad($data);
			$data['msg'] = 'Ad successfully added';
			$this->load->view('create_ad',$data);
		}
		else
		{
			$this->load->view('create_ad');	
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */