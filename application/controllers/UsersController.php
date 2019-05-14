<?php

class UsersController extends CI_Controller {

    function __construct() {
        parent::__construct();

// Load url helper
        $this->load->helper('url');
    }

    public function user() {
 $this->load->helper('html');
        $this->load->model('Usermodel');
        $data['users'] = $this->Usermodel->getUserdata();
        $this->load->view('users/userlist', $data);
    }

}
//echo br(3);              //Html helper using for br tag
?>
