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
        if($products->store())
        {
            $_SESSION['msg'] = 'Record sucessfully insert.';
            $data['data']=$products->index();
            $this->load->view('custom/index', $data);
        }

    }

    /**
     * Update Data from this method.
     *
     * @return Response
     */
    public function update()
    {
        $products=new customModel;
        if ( $products->update() ) {
            $data['data']=$products->index();
            $_SESSION['msg'] = 'Record Update.';
            $this->load->view('custom/index', $data) ;
        }
    }

    /**
     * Delete Data from this method.
     *
     * @return Response
     */
    public function delete($id)
    {
        $products=new customModel;

        if ( $products->delete($id) ) {
            $data['data']=$products->index();
            $data['data']=$products->index();
            $_SESSION['msg'] = 'Record sucessfully Delete.';
            $this->load->view('custom/index', $data);
        }
    }

}