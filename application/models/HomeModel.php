<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//model is verbonden met de database calendar, birthdays op phpmyadmin.
class HomeModel extends CI_Model {

  
  public function getData() {
    $query = $this->db->get('birthdays');
    return $query->result();
  }


  
}