<?php
/**
 * Created by PhpStorm.
 * User: LENOVO
 * Date: 13.06.2019
 * Time: 01:49
 */
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "mustafa bozkaya";
    }

    public function login_form()
    {
        $this->load->view("login_v");
    }

    public function register_form()
    {
        $this->load->view("register_v");
    }

    public function login()
    {
        $this->load->view("homepage_v");
    }

}