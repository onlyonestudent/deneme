<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 13.06.2019
 * Time: 01:49
 */
class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "merhaba";
    }

    public function login_form()
    {
        $this->load->view("login_v");
    }

    public function login()
    {
        $this->load->view("homepage_v");
    }

}