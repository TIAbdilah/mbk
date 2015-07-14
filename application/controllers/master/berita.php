<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->berita_model->select_all()->result();
        $data['page_content'] = 'admin/master/berita/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->berita_model->select_by_field(array('id_berita' => $id))->row();
        $data['page_content'] = 'admin/master/berita/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_kategori'] = $this->kategori_berita_model->select_all()->result();
        $data['page_content'] = 'admin/master/berita/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_tipeModul'] = $this->listcode_model->select_by_field(array('list_name' => 'tipe_modul'))->result();
        $data['data'] = $this->berita_model->select_by_field(array('id_berita' => $id))->row();
        $data['page_content'] = 'admin/master/berita/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['id_kategori'] = $this->input->post('inpKategori');
        $data['judul'] = $this->input->post('inpJudul');
        $data['headline'] = $this->input->post('inpHeadline');
        $data['isi'] = $this->input->post('inpIsi');     
//        $data['foto'] = $this->input->post('inpGbr');    
        
        //upload gambar
        $config = array(
            'upload_path' => "./assets/admin/img/news/",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'remove_space' => TRUE
        );
        $this->upload->initialize($config);
        if ($this->upload->do_upload('inpGbr')) {
            $dok = $this->upload->data();
            $data['foto'] = $dok['file_name'];
        }else{
            $data['error'] = array('error' => $this->upload->display_errors());
            
        }

        //process
        if ($action == 'add') {
            // add    
            $this->berita_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->berita_model->edit($data, array('id_berita' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('master/berita');
    }

    public function delete($id = null) {
        $this->berita_model->delete(array('id_berita' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('master/berita');
    }

}
