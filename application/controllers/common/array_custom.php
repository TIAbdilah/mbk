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

class Array_custom extends CI_Controller {

    var $active = array(
        '0' => '<span class="label label-danger">Tidak Aktif</span>',
        '1' => '<span class="label label-success">Aktif</span>'
    );

}
