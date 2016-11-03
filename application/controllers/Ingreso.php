<?php

class Ingreso extends CI_Controller
{
    function _construct()
    {
        parent::_construct();
    }
    function index()
    {
        
        $this->load->view('Ingreso');
    }
    
}


?>  