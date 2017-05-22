<?php
    class Zakaznici extends CI_Controller{
        public function index(){

            $data['title'] = 'Zoznam zákazníkov';

            $data['zakaznici'] = $this->Zakaznici_model->get_Zakaznici();

            $this->load->view('templates/header');
            $this->load->view('zakaznici/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($idZakaznika = NULL){
            $data['zakaznik'] = $this->Zakaznici_model->get_Zakaznici($idZakaznika);
            if(empty($data['zakaznik'])){
                show_404();
            }
            //$data['title'] = $data['zakaznik']['title'];
            $data['title'] = $data['zakaznik']['Meno'] . $data['zakaznik']['Priezvisko'];

            $this->load->view('templates/header');
            $this->load->view('zakaznici/view', $data);
            $this->load->view('templates/footer');
        }
    }