<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author TIAbdilah
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('utilitas/user_model');
    }

    public function index() {
        $data['title_page'] = 'INDEX';
        $this->load->view('login/sign_in', $data);
    }

    public function process_login() {
        $this->form_validation->set_rules('inpUsername', 'Username', 'trim|required');
        $this->form_validation->set_rules('inpPassword', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'Login Gagal!, username atau password salah ');
            $this->load->view('login/sign_in');
        } else {
            $username = $this->input->post('inpUsername');
            $password = $this->input->post('inpPassword');
            $param = array(
                'username' => $username,
                'password' => $password
            );
            $count_user = $this->user_model->select_by_field($param)->num_rows();
            if ($count_user == 1) {
                $data_user = $this->user_model->select_by_field($param)->row();
                if ($data_user->active == 0) {
                    $this->session->set_flashdata('message', 'Username sudah terdaftar dan belum aktif');
                    $this->load->view('login/sign_in');
                } else {
                    $sessionData['username'] = $data_user->username;
                    $sessionData['role'] = $data_user->nama_role;
                    $sessionData['is_login'] = TRUE;

                    $this->session->set_userdata($sessionData);
                    redirect('master/home');
                }
            } else {
                $this->session->set_flashdata('message', 'Login Gagal!, username atau password salah ');
                $this->load->view('login/sign_in');
            }
        }
    }

    public function process_logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
