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

        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );

        return $this->db->insert('test', $data);
    }

    public function update()
    {
        $id = $this->input->post('id');
        $data=array(
            'name' => $this->input->post('name'),
            'email'=> $this->input->post('email')
        );
        if($id==0){
            return $this->db->insert('products',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('test',$data);
        }
    }


    public function delete($id)
    {

        $this->db->where('id', $id);
        $res = $this->db->delete('test');

        return $res;
    }


}