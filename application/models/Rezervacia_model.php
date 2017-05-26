<?php
    class Rezervacia_model extends CI_model{
        public function __construct(){
            $this->load->database();
        }

        public function get_rezervacia($idRezervacia = FALSE, $limit = FALSE, $offset = FALSE)
        {
            if($limit){
                $this->db->limit($limit, $offset);
            }
            if ($idRezervacia === FALSE) {
                $this->db->join('zakaznici', 'zakaznici.idZakaznika = rezervacia.Zakaznik_idZakaznik');
                $this->db->join('sportovisko', 'sportovisko.idSportovisko = rezervacia.Sportovisko_idSportovisko');
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
                'pocet_ludi' => $this->input->post('pocet_ludi'),
                'Zakaznik_idZakaznik' => $this->input->post('Zakaznik_idZakaznik'),
                'Sportovisko_idSportovisko' => $this->input->post('Sportovisko_idSportovisko')
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
                'pocet_ludi' => $this->input->post('pocet_ludi'),
                'Zakaznik_idZakaznik' => $this->input->post('Zakaznik_idZakaznik'),
                'Sportovisko_idSportovisko' => $this->input->post('Sportovisko_idSportovisko')
            );
            $this->db->where('idRezervacia', $this->input->post('idRezervacia'));
            return $this->db->update('rezervacia', $data);
        }

        public function get_zakaznika_rezervacie(){
            $this->db->order_by('Meno');
            $query = $this->db->get('zakaznici');
            return $query->result_array();
        }

        public function get_sportovisko_rezervacie(){
            $this->db->order_by('Nazov_sportoviska');
            $query = $this->db->get('sportovisko');
            return $query->result_array();
        }
    }