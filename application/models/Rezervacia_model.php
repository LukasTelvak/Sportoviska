<?php
    class Rezervacia_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_rezervacia($idRezervacia = FALSE)
        {
            if ($idRezervacia === FALSE) {
                $query = $this->db->get('rezervacia');
                return $query->result_array();
            }
            $query = $this->db->get_where('rezervacia', array('idrezervacia' => $idRezervacia));
            return $query->row_array();
        }

        public function create_rezervacia(){
            $idRezervacia = url_title($this->input->post('title'));

            $data = array(
                'datum' => $this->input->post('datum'),
                'idRezervacia' => $idRezervacia,
                'cas' => $this->input->post('cas'),
                'pocet_ludi' => $this->input->post('pocet_ludi')
            );

            return $this->db->insert('rezervacia', $data);
        }

        public function delete_rezervacia($idRezervacia){
            $this->db->where('idRezervacia', $idRezervacia);
            $this->db->delete('rezervacia');
            return true;
        }

        public function update_rezervacia(){
            $idRezervacia = url_title($this->input->post('title'));

            $data = array(
                'datum' => $this->input->post('datum'),
                'cas' => $this->input->post('cas'),
                'pocet_ludi' => $this->input->post('pocet_ludi')
            );
            $this->db->where('idRezervacia', $this->input->post('idRezervacia'));
            return $this->db->update('rezervacia', $data);
        }
    }