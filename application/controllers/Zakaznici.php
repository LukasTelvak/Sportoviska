<?php
class Zakaznici extends CI_Controller{
public function index(){

$data['title'] = 'Zoznam zákazníkov';

$data['zakaznici'] = $this->Zakaznici_model->get_Zakaznici();

$this->load->view('templates/header');
$this->load->view('zakaznici/index', $data);
$this->load->view('templates/footer');
}
}