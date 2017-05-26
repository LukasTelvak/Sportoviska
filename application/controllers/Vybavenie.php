<?php
    class Vybavenie extends CI_Controller{
        public function index($offset = 0){
            $config['base_url'] = base_url() . 'vybavenie/index/';
            $config['total_rows'] = $this->db->count_all('vybavenie');
            $config['per_page'] = 7;
            $config['uri_segment'] = 3;
            $config['attributes'] = array('class' => 'pagination-link');

            $this->pagination->initialize($config);

            $data['title'] = 'Zoznam vybavenia športovísk';

            $data['vybavenie'] = $this->Vybavenie_model->get_vybavenie(FALSE, $config['per_page'], $offset);

            $this->load->view('templates/header');
            $this->load->view('vybavenie/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($idVybavenie = NULL){
            $data['vybavenie_data'] = $this->Vybavenie_model->get_vybavenie($idVybavenie);
            if(empty($data['vybavenie_data'])){
                show_404();
            }
            $data['title'] = $data['vybavenie_data']['Nazov'];

            $this->load->view('templates/header');
            $this->load->view('vybavenie/view', $data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Vložiť nové vybavenie';

            $this->form_validation->set_rules('nazov', 'Názov vybavenia', 'required');
            $this->form_validation->set_rules('pocet_ks', 'Počet kusov', 'required');


            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('vybavenie/create', $data);
                $this->load->view('templates/footer');
            }else{
                $this->Vybavenie_model->create_vybavenie();
                redirect('vybavenie');
            }
        }

        public function delete($idVybavenie){
            $this->Vybavenie_model->delete_vybavenie($idVybavenie);
            redirect('vybavenie');
        }

        public function edit($idVybavenie){
            $data['vybavenie_data'] = $this->Vybavenie_model->get_vybavenie($idVybavenie);
            if(empty($data['vybavenie_data'])){
                show_404();
            }
            $data['title'] = 'Upraviť údaje o vybavení';

            $this->load->view('templates/header');
            $this->load->view('vybavenie/edit', $data);
            $this->load->view('templates/footer');
        }

        public function update(){
            $this->Vybavenie_model->update_vybavenie();
            redirect('vybavenie');
        }


    }