<?php
    class Sportovisko_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_sportovisko($idSportovisko = FALSE){
            if($idSportovisko === FALSE){
                $query = $this->db->get('sportovisko');
                return $query->result_array();
            }
            $query = $this->db->get_where('sportovisko', array('idSportovisko' => $idSportovisko));
            return $query->row_array();
        }

        public function create_sportovisko(){
            $idSportovisko = url_title($this->input->post('title'));

            $data = array(
                'nazov' => $this->input->post('nazov'),
                'idSportovisko' => $idSportovisko,
                'pocet' => $this->input->post('pocet')
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
                'nazov' => $this->input->post('nazov'),
                'pocet' => $this->input->post('pocet'),
            );
            $this->db->where('idSportovisko', $this->input->post('idSportovisko'));
            return $this->db->update('sportovisko', $data);
        }
    }