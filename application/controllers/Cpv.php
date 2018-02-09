<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpv extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cpv_dump_model');
        $this->load->library('Datetime_formatter');
    }

    public function index() {
        $this->load->view('cpv_dump/index_page');
    }

    public function dump($dump_id) {

    }

    public function all_dump() {

    }

} //end Cpv controller class