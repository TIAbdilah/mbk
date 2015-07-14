<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('master/content_model');
    }
    
    public function about() {
        $data['data'] = $this->content_model->select_by_field(array('nm_content'=>'about'))->row();
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index',$data);
    }
        
    public function tupoksi() {
        $data['data'] = $this->content_model->select_by_field(array('nm_content'=>'tupoksi'))->row();
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index',$data);
    }
    
    public function struktur_org() {
        $data['data'] = $this->content_model->select_by_field(array('nm_content'=>'struktur_org'))->row();
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index',$data);
    }
    
    public function contact() {
        $data['data'] = $this->content_model->select_by_field(array('nm_content'=>'contact'))->row();
        $data['page'] = 'public/content/isi';
        $this->load->view('public/index',$data);
    }

}
