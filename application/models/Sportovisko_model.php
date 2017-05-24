<?php
    class Sportovisko_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_sportovisko($idSportovisko = FALSE){
            if($idSportovisko === FALSE){
                $this->db->join('vybavenie', 'vybavenie.idVybavenie = sportovisko.Vybavenie_idVybavenie');
                $query = $this->db->get('sportovisko');
                return $query->result_array();
            }
            $query = $this->db->get_where('sportovisko', array('idSportovisko' => $idSportovisko));
            return $query->row_array();
        }

        public function create_sportovisko(){
            $idSportovisko = url_title($this->input->post('title'));

            $data = array(
                'nazov_sportoviska' => $this->input->post('nazov'),
                'idSportovisko' => $idSportovisko,
                'pocet' => $this->input->post('pocet'),
                'Vybavenie_idVybavenie' => $this->input->post('Vybavenie_idVybavenie')
            );

            return $this->db->insert('sportovisko', $data);
        }

        public function delete_sportovisko($idSportovisko){
            $this->db->where('idSportovisko', $idSportovisko);
            $this->db->delete('sportovisko');
            return true;
        }

        public function update_sportovisko(){
            $idSportovisko = url_title($this->input->post('title'));

            $data = array(
                'nazov_sportoviska' => $this->input->post('nazov'),
                'pocet' => $this->input->post('pocet'),
                'Vybavenie_idVybavenie' => $this->input->post('Vybavenie_idVybavenie')
            );
            $this->db->where('idSportovisko', $this->input->post('idSportovisko'));
            return $this->db->update('sportovisko', $data);
        }

        public function get_vybavenie_sportoviska(){
            $this->db->order_by('Nazov');
            $query = $this->db->get('vybavenie');
            return $query->result_array();
        }
    }