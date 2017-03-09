<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PLATE_Controller extends CI_Controller {
    public $data;

    /**
	 * Reference to CodeIgniter instance
	 *
	 * @var object
	 */
	protected $CI;

    function __construct() {
        parent::__construct();

        $this->CI =& get_instance();
    }
    /*
    | -------------------------------------------------------------------
    |  Load output with base template
    | -------------------------------------------------------------------
    */
    function _output($content) {
        // Load the base template with output content available as $content
        $data['content'] = &$content;
        echo($this->load->view($this->plate->theme_name . '/base', $data, true));
    }
    /*
    | -------------------------------------------------------------------
    |  Load view from theme folder. Just easier so you don't have to
    |  include the theme name ($this->plate->theme_name) if using 
    |  $this->load->view() directly.
    | -------------------------------------------------------------------
    */
    function view($view, $data = array()) {
        $this->data = $data;
        $this->load->view($this->plate->theme_name . '/' . $view, $this->data);
    }
}
