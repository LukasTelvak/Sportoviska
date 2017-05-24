<?php
    class Sportovisko_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_sportovisko($idSportovisko = FALSE){
            if($idSportovisko === FALSE){
                $this->db->join('vybavenie', 'vybavenie.idVybavenie = sportovisko.Vybavenie_idVybavenie');
                $this->db->join('cennik', 'cennik.idCennik = sportovisko.Cennik_idCennik');
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
                'Vybavenie_idVybavenie' => $this->input->post('Vybavenie_idVybavenie'),
                'Cennik_idCennik' => $this->input->post('cennik_idCennik')
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
                'Vybavenie_idVybavenie' => $this->input->post('Vybavenie_idVybavenie'),
                'Cennik_idCennik' => $this->input->post('cennik_idCennik')
            );
            $this->db->where('idSportovisko', $this->input->post('idSportovisko'));
            return $this->db->update('sportovisko', $data);
        }

        public function get_vybavenie_sportoviska(){
            $this->db->order_by('Nazov');
            $query = $this->db->get('vybavenie');
            return $query->result_array();
        }

        public function get_cennik_sportoviska(){
            $this->db->order_by('Hodinova_sadzba');
            $query = $this->db->get('cennik');
            return $query->result_array();
        }
    }