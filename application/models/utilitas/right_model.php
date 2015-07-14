<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of template_model
 *
 * @author TIAbdilah
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Right_model extends CI_Model {

    var $table_name = 'u_right';
    
    public function __construct() {
        parent::__construct();
    }

    public function select_all() {
        $this->db->select('*');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('nama_modul')->from('u_modul m');
        $sub->where('m.id_modul = u_right.id_modul');
        $this->subquery->end_subquery('nama_modul');
        
        $this->db->from($this->table_name);
        $this->db->order_by('id_modul,kode_right');
        return $this->db->get();
    }

    public function select_by_field($param = array()) {
        $this->db->select('*');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('nama_modul')->from('u_modul m');
        $sub->where('m.id_modul = u_right.id_right');
        $this->subquery->end_subquery('nama_modul');
        
        $this->db->from($this->table_name);
        $this->db->where($param);
        $this->db->order_by('id_modul');
        return $this->db->get();
    }

    public function add($data) {
        $this->db->insert($this->table_name, $data);
    }

    public function edit($data, $param = array()) {
        $this->db->update($this->table_name, $data, $param);
    }

    public function delete($param = array()) {
        $this->db->delete($this->table_name, $param);
    }
    
}
