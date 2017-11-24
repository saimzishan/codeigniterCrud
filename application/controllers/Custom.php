<?php

/**
 * Created by PhpStorm.
 * User: Saim
 * Date: 11/24/2017
 * Time: 11:02 AM
 */
class Custom extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');

         $this->load->model('customModel');
    }

    function index(){
        $products=new customModel;
        $data['data']=$products->index();

        $this->load->view('custom/index',$data);
    }

    public function store()
    {
        $products=new customModel;
        $products->store();
        redirect(base_url('custom'));
    }

}