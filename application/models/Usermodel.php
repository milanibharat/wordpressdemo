 <?php

class Usermodel extends CI_Model {

    public function getUserdata() {
        $this->load->library(array('form_validation'),('email'));         //loading multiple libraries
        
        //$this->form_validation->fb();
        //$this->email->fb();
        
        $this->load->database();
        $q=$this->db->get('users');                 //for sqli only use query(select * from users) else use get('table_name') for all
        return $q->result_array();
        

        //$this->db->SELECT('firstname');             //shows only column you want to show on UI.
        //$q=$this->db->where('id',1);              //where condition
        
        /*
        echo '<pre>';
        print_r($result);
         * 
         */
        
        /*Method Chaining to make query simple and small
         * $this->db->where('id',1)
         *          ->get("users"); 
         */
        
        
        /*without Database
        return 
            [
                ['firstname'=>'ABC','accountno'=>'123456'],
                ['firstname'=>'MNO','accountno'=>'545865'],
                ['firstname'=>'PQR','accountno'=>'987654'],
            ]; 
    * 
    */
    }
}

?>
