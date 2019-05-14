 <?php

class User extends CI_Model {

    public function getUsers() {
        //$this->load->database();  //using database
        //$q = $this->db->query("SELECT * from user_accounts where user_id=1");
        $q = $this->db->select('firstname,lastname')
                ->get("user_accounts");
        /*
          $result=$q->result();

          echo '<pre>';
          print_r($result);
         * 
         */
        return $q->result_array();    //return $q->result();
    }
    

}

?>
