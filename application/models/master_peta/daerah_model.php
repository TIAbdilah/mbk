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

class Daerah_model extends CI_Model {

    var $table_name = 'mp_daerah';

    public function __construct() {
        parent::__construct();
    }

    public function select_all($param = null) {   
        $this->db->select('*');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp1.nama_daerah')->from('mp_daerah mp1');
        $sub->where('mp1.kode_daerah = left(mp.kode_daerah,2)');
        $this->subquery->end_subquery('nm_propinsi');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp2.nama_daerah')->from('mp_daerah mp2');
        $sub->where('mp2.kode_daerah = left(mp.kode_daerah,5)');
        $this->subquery->end_subquery('nm_kabupaten');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp3.nama_daerah')->from('mp_daerah mp3');
        $sub->where('mp3.kode_daerah = left(mp.kode_daerah,8)');
        $this->subquery->end_subquery('nm_kecamatan');
        
        $this->db->from($this->table_name);
        $this->db->order_by('kode_daerah');
        return $this->db->get();
    }

    public function select_by_field($param = array()) {        
        $this->db->select('*');

        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp1.nm_daerah')->from('mp_daerah mp1');
        $sub->where('mp1.kode_daerah = left('.$this->table_name.'.kode_daerah,2)');
        $this->subquery->end_subquery('nm_propinsi');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp2.nm_daerah')->from('mp_daerah mp2');
        $sub->where('mp2.kode_daerah = left('.$this->table_name.'.kode_daerah,5)');
        $this->subquery->end_subquery('nm_kabupaten');
        
        $sub = $this->subquery->start_subquery('select');
        $sub->select('mp3.nm_daerah')->from('mp_daerah mp3');
        $sub->where('mp3.kode_daerah = left('.$this->table_name.'.kode_daerah,8)');
        $this->subquery->end_subquery('nm_kecamatan');
        
        $this->db->from($this->table_name);
        $this->db->where($param);
        $this->db->order_by('kode_daerah');
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
