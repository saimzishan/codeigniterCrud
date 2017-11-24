<?php

/**
 * Created by PhpStorm.
 * User: Saim
 * Date: 11/24/2017
 * Time: 11:20 AM
 */
class customModel extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function index(){
        $query = $this->db->get('test');
        return $query->result();
    }

    /**
     * Store Data from this method.
     *
     * @return Response
     */
    public function store()
    {
        $this->load->database();

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );

        return $this->db->insert('test', $data);
    }



}