<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Output_keg extends CI_Controller {
    
    public function sppip_rpkpp() {
        $data['title_page'] = 'SPPIP dan RPKPP';
        $data['page'] = 'public/output_keg/sppip_rpkpp';
        $this->load->view('public/index',$data);
    }
    
    public function perkotaan() {
        $data['title_page'] = 'Perkotaan';
        $data['page'] = 'public/output_keg/perkotaan';
        $this->load->view('public/index',$data);
    }
    
    public function pedesaan() {
        $data['title_page'] = 'Pedesaan';
        $data['page'] = 'public/output_keg/pedesaan';
        $this->load->view('public/index',$data);
    }
    
    public function rusunawa() {
        $data['title_page'] = 'RUSUNAWA';
        $data['page'] = 'public/output_keg/rusunawa';
        $this->load->view('public/index',$data);
    }
    
    public function ppip_ris_pnpm() {
        $data['title_page'] = 'PPIP/RIS PNPM';
        $data['page'] = 'public/output_keg/ppip_ris_pnpm';
        $this->load->view('public/index',$data);
    }

}
