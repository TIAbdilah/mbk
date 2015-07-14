<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author TIAbdilah
 */
require_once(APPPATH . 'controllers/common/array_custom.php');
require_once(APPPATH . 'controllers/common/counter.php');
require_once(APPPATH . 'controllers/common/format_date.php');
require_once(APPPATH . 'controllers/common/number_to_word_ind.php');
require_once(APPPATH . 'controllers/common/message.php');
require_once(APPPATH . 'controllers/common/web_text.php');

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $array_custom = null;
    var $counter = null;
    var $format_date = null;
    var $number_to_word_ind = null;
    var $text = array();

    public function __construct() {
        parent::__construct();
        //model master
        $this->load->model('master/berita_model');
        $this->load->model('master/kategori_berita_model');
        $this->load->model('master/content_model');
        //model master peta
        $this->load->model('master_peta/daerah_model');
        //model transaksi
        //model report
        //model utilitas
        $this->load->model('utilitas/user_model');
        $this->load->model('utilitas/role_model');
        $this->load->model('utilitas/listcode_model');
        $this->load->model('utilitas/modul_model');
        $this->load->model('utilitas/right_model');

        //library        
        $this->load->library('upload');

        $this->get_instance_var();
        $this->is_logged_in();
    }

    public function get_instance_var() {
        $this->counter = new Counter();
        $this->format_date = new Format_date();
        $this->number_to_word_ind = new Number_to_word_ind();
        $this->text['msg'] = new Message();
        $this->text['txt'] = new Web_text();
        $this->text['arc'] = new Array_custom();
        $this->text['rg'] = $this->array_right($this->session->userdata('role'));
    }

    public function is_logged_in() {
        if ($this->session->userdata('role') == '') {
            redirect('login');
        }
    }

    public function array_right($role) {
        $data_role = $this->role_model->select_by_field(array('nama_role' => $role))->row();
        $data_right = $this->right_model->select_all()->result();
        return $this->string_to_array($data_role->right, $data_right);
    }

    public function array_to_string($param = array()) {
        $str = '';
        foreach ($param as $value) {
            if ($value == $param[0]) {
                $str = $str . $value;
            } else {
                $str = $str . ',' . $value;
            }
        }
        return $str;
    }

    public function string_to_array($str, $array) {
        $chbx = array();
        foreach ($array as $value) {
            if (strpos($str, $value->kode_right) !== FALSE) {
                $bl = true;
            } else {
                $bl = false;
            }
            $chbx[$value->kode_right] = $bl;
        }
        return $chbx;
    }

}
