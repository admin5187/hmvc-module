<?php
class Login extend CI_Controller{

  public function index()
  {
   // form parameters
   $username=$this->input->post('username');
   $password=$this->input->post('password');
   
  }

}
