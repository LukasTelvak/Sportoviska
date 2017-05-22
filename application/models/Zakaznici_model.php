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
    }