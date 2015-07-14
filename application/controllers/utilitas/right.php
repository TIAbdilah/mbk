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

class Right extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data_modul'] = $this->modul_model->select_all()->result();
        $data['list_data'] = $this->right_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/right/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->right_model->select_by_field(array('id_right' => $id))->row();
        ;
        $data['page_content'] = 'admin/utilitas/right/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_modul'] = $this->modul_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/right/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_modul'] = $this->modul_model->select_all()->result();
        $data['data'] = $this->right_model->select_by_field(array('id_right' => $id))->row();
        $data['page_content'] = 'admin/utilitas/right/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['id_modul'] = $this->input->post('inpIdModul');
        $data['kode_right'] = $this->input->post('inpKodeRight');
        if ($data['kode_right'] == '') {
            $data_modul = $this->modul_model->select_by_field(array('id_modul'=>$data['id_modul']))->row();
            $pattern = $data_modul->kode_modul;
            $ctr = $this->counter->generate_id($pattern);
            $data['kode_right'] = $pattern . '' . chr(96+$ctr);
        } 
        $data['nama_right'] = $this->input->post('inpNamaRight');

        //process
        if ($action == 'add') {
            // add    
            $this->right_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->right_model->edit($data, array('id_right' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('utilitas/right');
    }

    public function delete($id = null) {
        $this->right_model->delete(array('id_right' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('utilitas/right');
    }

}
