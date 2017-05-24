<?php
    class Sportovisko extends CI_Controller{
        public function index(){

            $data['title'] = 'Zoznam športovísk';

            $data['sportovisko'] = $this->Sportovisko_model->get_sportovisko();

            $this->load->view('templates/header');
            $this->load->view('sportovisko/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($idSportovisko = NULL){
            $data['sportovisko_data'] = $this->Sportovisko_model->get_sportovisko($idSportovisko);
            if(empty($data['sportovisko_data'])){
                show_404();
            }
            $data['title'] = 'Detail športoviska';

            $this->load->view('templates/header');
            $this->load->view('sportovisko/view', $data);
            $this->load->view('templates/footer');
        }

        public function create()
        {
            $data['title'] = 'Vložiť nové športovisko';

            $data['vybavenie'] = $this->Sportovisko_model->get_vybavenie_sportoviska();

            $this->form_validation->set_rules('nazov', 'Názov', 'required');


            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('sportovisko/create', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Sportovisko_model->create_sportovisko();
                redirect('sportovisko');
            }
        }

            public function delete($idSportovisko){
                $this->Sportovisko_model->delete_sportovisko($idSportovisko);
                redirect('sportovisko');
            }

        public function edit($idSportovisko){
            $data['sportovisko_data'] = $this->Sportovisko_model->get_sportovisko($idSportovisko);

            $data['vybavenie'] = $this->Sportovisko_model->get_vybavenie_sportoviska();

            if(empty($data['sportovisko_data'])){
                show_404();
            }
            $data['title'] = 'Upraviť údaje športoviska';

            $this->load->view('templates/header');
            $this->load->view('sportovisko/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->Sportovisko_model->update_sportovisko();
            redirect('sportovisko');
        }


        }
