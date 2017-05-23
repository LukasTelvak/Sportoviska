<?php
    class Cennik extends CI_Controller{
        public function index(){

            $data['title'] = 'Zoznam zákazníkov';

            $data['cennik'] = $this->Cennik_model->get_cennik();

            $this->load->view('templates/header');
            $this->load->view('cennik/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($idCennik = NULL){
            $data['cennik_data'] = $this->Cennik_model->get_cennik($idCennik);
            if(empty($data['cennik_data'])){
                show_404();
            }
            $data['title'] = 'Detail cenníku';

            $this->load->view('templates/header');
            $this->load->view('cennik/view', $data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Vložiť nový cenník';

            $this->form_validation->set_rules('hodinova_sadzba', 'Hodnota', 'required');


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('cennik/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Cennik_model->create_cennik();
                redirect('cennik');
            }
        }

        public function delete($idCennik){
            $this->Cennik_model->delete_cennik($idCennik);
            redirect('cennik');
        }

        public function edit($idCennik){
            $data['cennik_data'] = $this->Cennik_model->get_cennik($idCennik);
            if(empty($data['cennik_data'])){
                show_404();
            }
            $data['title'] = 'Upraviť údaje cenníka';

            $this->load->view('templates/header');
            $this->load->view('cennik/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->Cennik_model->update_cennik();
            redirect('cennik');
        }

}