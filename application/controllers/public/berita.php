<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once(APPPATH . 'controllers/common/format_date.php');

class Berita extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('master/berita_model');
    }

    public function index2() {
        $data['title_page'] = 'List Berita';
        $data['format_date'] = new Format_date();
        $data['list_data'] = $this->berita_model->select_all()->result();
        $data['page'] = 'public/berita_agenda/berita/list';
        $this->load->view('public/index', $data);
    }

    public function index($offset = 0) {
        $limit = 5;
        $data['title_page'] = 'List Berita';
        $data['format_date'] = new Format_date();
        $param = array(
            'offset' => $offset,
            'limit' => $limit
        );                
        $data['list_data'] = $this->berita_model->select_all($param)->result();

        $config = array();
        $config['base_url'] = base_url().'public/berita/index';
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['num_links'] = 5;
        $config['total_rows'] = $this->berita_model->select_all()->num_rows();
        $this->pagination->initialize($config);
        $data['page_link'] = $this->pagination->create_links();
        print_r($data['page_link']);        
        $data['page'] = 'public/berita_agenda/berita/list';
//        $this->load->view('public/index', $data);
    }

    public function view($id) {
        $data['title_page'] = 'View Berita';
        $data['page'] = 'public/berita_agenda/berita/view';
        $this->load->view('public/index', $data);
    }

}
