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

class Format_date extends CI_Controller {

    public function index() {
        $number = '2015-05-08';
        $date_time = strtotime($number);
        echo date('j F Y', $date_time) . '<br>';
        echo $this->indonesian_date($date_time, 'j F Y');
        echo $this->format_date_dfy($number) . '<br>';
        echo $this->format_date_dmy($number) . '<br>';
        echo $this->format_date_sql($number) . '<br>';
    }

    function indonesian_date($timestamp = '', $date_format = 'Y-m-d', $suffix = null) {
        if (trim($timestamp) == '') {
            $timestamp = time();
        } elseif (!ctype_digit($timestamp)) {
            $timestamp = strtotime($timestamp);
        }
        # remove S (st,nd,rd,th) there are no such things in indonesia :p
        $date_format = preg_replace("/S/", "", $date_format);
        $pattern = array(
            '/Mon[^day]/', '/Tue[^sday]/', '/Wed[^nesday]/', '/Thu[^rsday]/',
            '/Fri[^day]/', '/Sat[^urday]/', '/Sun[^day]/', '/Monday/', '/Tuesday/',
            '/Wednesday/', '/Thursday/', '/Friday/', '/Saturday/', '/Sunday/',
            '/Jan[^uary]/', '/Feb[^ruary]/', '/Mar[^ch]/', '/Apr[^il]/', '/May/',
            '/Jun[^e]/', '/Jul[^y]/', '/Aug[^ust]/', '/Sep[^tember]/', '/Oct[^ober]/',
            '/Nov[^ember]/', '/Dec[^ember]/', '/January/', '/February/', '/March/',
            '/April/', '/June/', '/July/', '/August/', '/September/', '/October/',
            '/November/', '/December/',
        );
        $replace = array('Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min',
            'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu',
            'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des',
            'Januari', 'Februari', 'Maret', 'April', 'Juni', 'Juli', 'Agustus', 'Sepember',
            'Oktober', 'November', 'Desember',
        );
        $date = date($date_format, $timestamp);
        $date = preg_replace($pattern, $replace, $date);
        $date = "{$date} {$suffix}";
        return $date;
    }

    public function format_date_dfy($string) {
        $date_time = strtotime($string);
        return $this->indonesian_date($date_time, 'j F Y');
    }
    
    public function format_date_ldfy($string) {
        $date_time = strtotime($string);
        return $this->indonesian_date($date_time, 'l, j F Y');
    }

    public function format_date_dmy($string) {
        $date_time = strtotime($string);
        return date('d-m-Y', $date_time);
    }

    public function format_date_sql($string) {
        $date_time = strtotime($string);
        return date('Y-m-d', $date_time);
    }

}
