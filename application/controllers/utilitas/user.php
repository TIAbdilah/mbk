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

class User extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $data['list_data'] = $this->user_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/user/list';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function view($id = null) {
        $data['title_page'] = 'VIEW';
        $data['data'] = $this->user_model->select_by_field(array('id_user' => $id))->row();
        $data['page_content'] = 'admin/utilitas/user/view';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $data['title_page'] = 'ADD';
        $data['SIList_role'] = $this->role_model->select_all()->result();
        $data['page_content'] = 'admin/utilitas/user/add';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function edit($id = null) {
        $data['title_page'] = 'EDIT';        
        $data['SIList_role'] = $this->role_model->select_all()->result();
        $data['data'] = $this->user_model->select_by_field(array('id_user' => $id))->row();
        $data['page_content'] = 'admin/utilitas/user/edit';
        $data['text'] = $this->text;
        $this->load->view('admin/index', $data);
    }

    public function process($action, $id = null) {
        // var
        $data['username'] = $this->input->post('inpUsername');
        $data['password'] = $this->input->post('inpPassword');
        $data['email'] = $this->input->post('inpEmail');
        $data['id_role'] = $this->input->post('inpIdRole');

        //process
        if ($action == 'add') {
            // add    
            $this->user_model->add($data);
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'add-success'));
        } elseif ($action == 'edit') {
            // edit    
            $this->user_model->edit($data, array('id_user' => $id));
            $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        }
        
        //error msg from db
        $error_msg = $this->db->_error_message();
        if (!empty($error_msg)) {
            $this->session->set_flashdata('message', $this->text['msg']->get_message('danger', $error_msg, 'error_db'));
        }

        redirect('utilitas/user');
    }

    public function delete($id = null) {
        $this->user_model->delete(array('id_user' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'delete-success'));
        redirect('utilitas/user');
    }

    public function aktivasi_user($action, $id = null) {
        if ($action == 'active') {
            $data['active'] = 1;
        } else {
            $data['active'] = 0;
        }
        $this->user_model->edit($data, array('id_user' => $id));
        $this->session->set_flashdata('message', $this->text['msg']->get_message('success', 'edit-success'));
        redirect('utilitas/user');
    }

}
