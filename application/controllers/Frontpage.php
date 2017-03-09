<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontpage extends PLATE_Controller {

	public function index() {
		$data = [
			'title' => 'Welcome to Plate',
			'body_class' => ''
		];

		$this->view('frontpage', $data);
	}
}
