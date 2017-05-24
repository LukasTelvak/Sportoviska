<?php
    class Rezervacia extends CI_Controller{
        public function index(){
            $data['title'] = 'Zoznam rezervácií';

            $data['rezervacia'] = $this->Rezervacia_model->get_rezervacia();

            $this->load->view('templates/header');
            $this->load->view('rezervacia/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($idRezervacia = NULL){
            $data['rezervacia_data'] = $this->Rezervacia_model->get_rezervacia($idRezervacia);
            if(empty($data['rezervacia_data'])){
                show_404();
            }
            $data['title'] = 'Detaily rezervácie';

            $this->load->view('templates/header');
            $this->load->view('rezervacia/view', $data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Vložiť novú rezerváciu';

            $this->form_validation->set_rules('datum', 'Dátum', 'required');
            $this->form_validation->set_rules('cas', 'Čas', 'required');
            $this->form_validation->set_rules('pocet_ludi', 'Počet ľudí', 'required');


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('rezervacia/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Rezervacia_model->create_rezervacia();
                redirect('rezervacia');
            }
        }

        public function delete($idRezervacia){
            $this->Rezervacia_model->delete_rezervacia($idRezervacia);
            redirect('rezervacia');
        }

        public function edit($idRezervacia){
            $data['rezervacia_data'] = $this->Rezervacia_model->get_rezervacia($idRezervacia);
            if(empty($data['rezervacia_data'])){
                show_404();
            }
            $data['title'] = 'Upraviť údaje o rezervácii';

            $this->load->view('templates/header');
            $this->load->view('rezervacia/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->Rezervacia_model->update_rezervacia();
            redirect('rezervacia');
        }
    }