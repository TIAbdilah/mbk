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

class Modul extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data_tipe_modul'] = $this->listcode_model->select_by_field(array('list_name' => 'tipe_modul'))->result();
        $data['list_data'] = $this->modul_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/modul/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->modul_model->select_by_field(array('id_modul' => $id))->row();
        ;
        $data['page_content'] = 'admin/utilitas/modul/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_tipeModul'] = $this->listcode_model->select_by_field(array('list_name' => 'tipe_modul'))->result();
        $data['page_content'] = 'admin/utilitas/modul/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['SIList_tipeModul'] = $this->listcode_model->select_by_field(array('list_name' => 'tipe_modul'))->result();
        $data['data'] = $this->modul_model->select_by_field(array('id_modul' => $id))->row();
        $data['page_content'] = 'admin/utilitas/modul/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['tipe_modul'] = $this->input->post('inpTipeModul');
        $data['kode_modul'] = $this->input->post('inpKodeModul');
        if ($data['kode_modul'] == '') {
            $pattern = substr($data['tipe_modul'], 0, 1);
            $data['kode_modul'] = $pattern . '' . $this->counter->generate_id_with_zero($pattern, 2);
        } 
        $data['nama_modul'] = $this->input->post('inpNamaModul');

        //process
        if ($action == 'add') {
            // add    
            $this->modul_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->modul_model->edit($data, array('id_modul' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('utilitas/modul');
    }

    public function delete($id = null) {
        $this->modul_model->delete(array('id_modul' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('utilitas/modul');
    }

}
