<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
    
    public function peraturan() {
        $data['title_page'] = 'Peraturan';
        $data['page'] = 'public/pengaturan/peraturan';
        $this->load->view('public/index',$data);
    }
    
    public function pedoman() {
        $data['title_page'] = 'Pedoman';
        $data['page'] = 'public/pengaturan/pedoman';
        $this->load->view('public/index',$data);
    }

}
