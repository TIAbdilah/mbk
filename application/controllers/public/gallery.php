<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery extends CI_Controller {
    
    public function about() {
        $data['title_page'] = 'Tentang Kami';
        $data['page'] = 'public/gallery/about';
        $this->load->view('public/index',$data);
    }
    
    public function ebook() {
        $data['title_page'] = 'EBook';
        $data['page'] = 'public/gallery/ebook';
        $this->load->view('public/index',$data);
    }
    
    public function foto_kegiatan() {
        $data['title_page'] = 'Foto Kegiatan';
        $data['page'] = 'public/gallery/foto_kegiatan';
        $this->load->view('public/index',$data);
    }
    
    public function film_dokumenter() {
        $data['title_page'] = 'Film Dokumenter';
        $data['page'] = 'public/gallery/film_dokumenter';
        $this->load->view('public/index',$data);
    }

}
