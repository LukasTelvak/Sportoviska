<?php
    class Vybavenie_model extends CI_model
    {
        public function __construct()
        {
            $this->load->database();
        }

        public function get_vybavenie($idVybavenie = FALSE)
        {
            if ($idVybavenie === FALSE) {
                $query = $this->db->get('vybavenie');
                return $query->result_array();
            }
            $query = $this->db->get_where('vybavenie', array('idvybavenie' => $idVybavenie));
            return $query->row_array();
        }

        public function create_vybavenie(){
            $idVybavenie = url_title($this->input->post('title'));

            $data = array(
                'nazov' => $this->input->post('nazov'),
                'idVybavenie' => $idVybavenie,
                'pocet_ks' => $this->input->post('pocet_ks')
            );

            return $this->db->insert('vybavenie', $data);
        }

        public function delete_vybavenie($idVybavenie){
            $this->db->where('idVybavenie', $idVybavenie);
            $this->db->delete('vybavenie');
            return true;
        }

        public function update_vybavenie(){
            $idVybavenie = url_title($this->input->post('title'));

            $data = array(
                'nazov' => $this->input->post('nazov'),
                'pocet_ks' => $this->input->post('pocet_ks')
            );
            $this->db->where('idVybavenie', $this->input->post('idVybavenie'));
            return $this->db->update('vybavenie', $data);
        }
    }