<?php
    class Cennik_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_cennik($idCennik = FALSE, $limit = FALSE, $offset = FALSE){
            if($limit){
                $this->db->limit($limit, $offset);
            }
            if($idCennik === FALSE){
                $query = $this->db->get('cennik');
                return $query->result_array();
            }
            $query = $this->db->get_where('cennik', array('idCennik' => $idCennik));
            return $query->row_array();
        }

        public function create_cennik(){
            $idCennik = url_title($this->input->post('title'));

            $data = array(
                'hodinova_sadzba' => $this->input->post('hodinova_sadzba'),
                'idCennik' => $idCennik
            );

            return $this->db->insert('cennik', $data);
        }

        public function delete_cennik($idCennik){
            $this->db->where('idCennik', $idCennik);
            $this->db->delete('cennik');
            return true;
        }

        public function update_cennik(){
            $idCennik = url_title($this->input->post('title'));

            $data = array(
                'hodinova_sadzba' => $this->input->post('hodinova_sadzba'),
            );
            $this->db->where('idCennik', $this->input->post('idCennik'));
            return $this->db->update('cennik', $data);
        }

    }