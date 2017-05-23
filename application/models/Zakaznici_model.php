<?php
    class Zakaznici_model extends CI_model{
        public function __construct()
        {
            $this->load->database();

        }

        public function get_zakaznici($idZakaznika = FALSE){
            if($idZakaznika === FALSE){
                $query = $this->db->get('zakaznici');
                return $query->result_array();
            }
            $query = $this->db->get_where('zakaznici', array('idZakaznika' => $idZakaznika));
            return $query->row_array();
        }

        public function create_Zakaznik(){
            $idZakaznika = url_title($this->input->post('title'));

            $data = array(
                'meno' => $this->input->post('meno'),
                'idZakaznika' => $idZakaznika,
                'priezvisko' => $this->input->post('priezvisko'),
                'telefon' => $this->input->post('telefon'),
                'adresa' => $this->input->post('adresa'),
                'mesto' => $this->input->post('mesto')
            );

            return $this->db->insert('zakaznici', $data);
        }

        public function delete_Zakaznik($idZakaznika){
            $this->db->where('idZakaznika', $idZakaznika);
            $this->db->delete('zakaznici');
            return true;
        }

        public function update_Zakaznik(){
            $idZakaznika = url_title($this->input->post('title'));

            $data = array(
                'meno' => $this->input->post('meno'),
                //'idZakaznika' => $idZakaznika,
                'priezvisko' => $this->input->post('priezvisko'),
                'telefon' => $this->input->post('telefon'),
                'adresa' => $this->input->post('adresa'),
                'mesto' => $this->input->post('mesto')
            );
            $this->db->where('idZakaznika', $this->input->post('idZakaznika'));
            return $this->db->update('zakaznici', $data);
        }
    }