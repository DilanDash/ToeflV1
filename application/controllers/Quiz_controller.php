<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz_controller extends CI_Controller {

	public function index()
	{
		$this->load->model('quiz_model');
        $respuestas['query'] = $this->quiz_model->getAnswers();
        $this->load->view('respuestas_view', $respuestas);
	}
}
?>