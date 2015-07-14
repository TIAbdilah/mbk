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

class Role extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->role_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/role/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['list_data_modul'] = $this->modul_model->select_all()->result();
        $data['list_data'] = $this->right_model->select_all()->result();
        $data['data'] = $this->role_model->select_by_field(array('id_role' => $id))->row();
        $data['page_content'] = 'admin/utilitas/role/view';
        $data['text'] = $this->text;
        $array_right = $this->right_model->select_all()->result();
        $data['chbx'] = $this->string_to_array($data['data']->right, $array_right);
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['list_data_modul'] = $this->modul_model->select_all()->result();
        $data['list_data'] = $this->right_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/role/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';
        $data['list_data_modul'] = $this->modul_model->select_all()->result();
        $data['list_data'] = $this->right_model->select_all()->result();
        $data['data'] = $this->role_model->select_by_field(array('id_role' => $id))->row();
        $data['page_content'] = 'admin/utilitas/role/edit';
        $data['text'] = $this->text;
        $array_right = $this->right_model->select_all()->result();
        $data['chbx'] = $this->string_to_array($data['data']->right, $array_right);
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['nama_role'] = $this->input->post('inpRoleName');
        $arr_right = $this->input->post('inpRight');
        $data['right'] = $this->array_to_string($arr_right);

        //process
        if ($action == 'add') {
            // add    
            $this->role_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->role_model->edit($data, array('id_role' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }

        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('utilitas/role');
    }

    public function delete($id = null) {
        $this->role_model->delete(array('id_role' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('utilitas/role');
    }

}
