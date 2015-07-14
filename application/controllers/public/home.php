<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function index() {
        $data['page'] = 'public/home';
        $this->load->view('public/index',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */