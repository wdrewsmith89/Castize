<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plate {
	/**
	 * Theme directory/name
	 *
	 * @var	string
	 */
	public $theme_name = 'plate';

	/**
	 * Path to theme directory
	 *
	 * @var	string
	 */
	public $theme_path;

	// --------------------------------------------------------------------

	/**
	 * Reference to CodeIgniter instance
	 *
	 * @var object
	 */
	protected $CI;

	// --------------------------------------------------------------------

	/**
	 * Class constructor
	 *
	 * @return	void
	 */
	public function __construct() {
		$this->CI =& get_instance();
		// Set template path
		$theme_name = $this->CI->config->item('theme_name');
		if(!is_null($theme_name) && is_dir(VIEWPATH.$theme_name)) {
			$this->theme_name = $theme_name;
		}
		$this->theme_path = VIEWPATH . $this->theme_name;
	}

	// --------------------------------------------------------------------

	/**
	 *  Additional meta tags to add to page head
	 *
	 * @return	void
	 */
	public function meta() {
        if(file_exists($this->theme_path . '/template/meta.php') === true) {
			$this->CI->load->view($this->theme_name . '/template/meta', $this->CI->load->data);
		}
		else {
			echo 'Could not load meta file ' . $this->theme_path . '/template/meta.php';
		}
	}

    // --------------------------------------------------------------------

    /**
	 * Grab the page title of the current page
	 *
	 * @return string Page title
	 */
    function title() {
        $title = '';
        if(isset($this->CI->load->data['title'])) {
            $title = $this->CI->load->data['title'];
        }
        return $title;
    }

	// --------------------------------------------------------------------

	/**
	 * Additional scripts and styles to include in page head
	 *
	 * @return	void
	 */
	public function head() {
        if(file_exists($this->theme_path . '/template/footer.php') === true) {
			$this->CI->load->view($this->theme_name . '/template/head', $this->CI->load->data);
		}
		else {
			echo 'Could not load head file ' . $this->theme_path . '/template/head.php';
		}
	}

	// --------------------------------------------------------------------

    /**
	 * Build and print string of classes to add to body tag
	 *
	 * @return void
	 */
    function body_class($additional_classes = null) {
        $body_class = '';

        // Add body class set in the controller
        if(isset($this->CI->load->data['body_class'])) {
            $body_class = $this->CI->load->data['body_class'];
        }

        // Add body classes using controlling class name
        if(isset($this->CI->router->class)) {
            $body_class .= " " . trim(strtolower($this->CI->router->class));
        }

        // Add any additional classes passed
        if(!is_null($additional_classes) && is_string($additional_classes)) {
            $body_class .= " " . trim($additional_classes);
        }

        return $body_class;
    }

    // --------------------------------------------------------------------

	/**
	 * Include template HEADER file
	 *
	 * @return	void
	 */
	public function header() {
		if(file_exists($this->theme_path . '/template/header.php') === true) {
			$this->CI->load->view($this->theme_name . '/template/header', $this->CI->load->data);
		}
		else {
			echo 'Could not load header file ' . $this->theme_path . '/template/header.php';
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Include template FOOTER file
	 *
	 * @return	void
	 */
	public function footer() {
		if(file_exists($this->theme_path . '/template/footer.php') === true) {
			$this->CI->load->view($this->theme_name . '/template/footer', $this->CI->load->data);
		}
		else {
			echo 'Could not load footer file ' . $this->theme_path . '/template/footer.php';
		}
	}
}
