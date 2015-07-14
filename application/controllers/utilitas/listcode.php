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

class Listcode extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data_head'] = $this->listcode_model->select_by_field(array('list_name' => ""))->result();
        $data['list_data'] = $this->listcode_model->select_by_field(array('list_name !=' => ""))->result();
        $data['page_content'] = 'admin/utilitas/listcode/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->listcode_model->select_by_field(array('id_listcode' => $id))->row();
        $data['page_content'] = 'admin/utilitas/listcode/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_listcode'] = $this->listcode_model->select_by_field(array('list_name' => ""))->result();
        $data['page_content'] = 'admin/utilitas/listcode/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['data'] = $this->listcode_model->select_by_field(array('id_listcode' => $id))->row();
        $data['SIList_listcode'] = $this->listcode_model->select_by_field(array('list_name' => ""))->result();
        $data['page_content'] = 'admin/utilitas/listcode/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['list_name'] = $this->input->post('inpListName');
        $data['list_item'] = $this->input->post('inpListItem');

        //process
        if ($action == 'add') {
            // add    
            $this->listcode_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->listcode_model->edit($data, array('id_listcode' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }
        
        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('utilitas/listcode');
    }

    public function delete($id = null) {
        $data = $this->listcode_model->select_by_field(array('id_listcode' => $id))->row();
        $this->listcode_model->delete(array('id_listcode' => $id));
        $list_name = $data->list_item;
        $this->listcode_model->delete(array('list_name' => $list_name));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('utilitas/listcode');
    }

}
