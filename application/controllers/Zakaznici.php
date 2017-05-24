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
            $data['zakaznici_data'] = $this->Zakaznici_model->get_Zakaznici($idZakaznika);
            if(empty($data['zakaznici_data'])){
                show_404();
            }
            $data['title'] = $data['zakaznici_data']['Meno'];

            $this->load->view('templates/header');
            $this->load->view('zakaznici/view', $data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Vložiť nového zákazníka';

            $this->form_validation->set_rules('meno', 'Meno zákazníka', 'required');
            $this->form_validation->set_rules('telefon', 'Telefónne číslo', 'required');
            $this->form_validation->set_rules('adresa', 'Adresa', 'required');
            $this->form_validation->set_rules('mesto', 'Mesto', 'required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('zakaznici/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Zakaznici_model->create_Zakaznik();
                redirect('zakaznici');
            }
        }

        public function delete($idZakaznika){
            $this->Zakaznici_model->delete_Zakaznik($idZakaznika);
            redirect('zakaznici');
        }

        public function edit($idZakaznika){
            $data['zakaznici_data'] = $this->Zakaznici_model->get_Zakaznici($idZakaznika);
            if(empty($data['zakaznici_data'])){
                show_404();
            }
            $data['title'] = 'Upraviť údaje zákazníka';

            $this->load->view('templates/header');
            $this->load->view('zakaznici/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->Zakaznici_model->update_Zakaznik();
            redirect('zakaznici');
        }
    }