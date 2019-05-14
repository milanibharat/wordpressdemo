<?php

class Form extends CI_Controller {

    public function index() {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        
          $this->form_validation->set_rules('username', 'Username', 'required');

          $this->form_validation->set_rules('password', 'Password', 'required');

          $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');

          $this->form_validation->set_rules('email', 'Email', 'required');
         

        //validating all fields
/*
        $this->form_validation->set_rules(
                'username', 'Username', 'required|min_length[5]|max_length[12]|is_unique[users.username]', array(
            'required' => 'You have not provided %s.',
            'is_unique' => 'This %s already exists.'
                )
        );
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
*/

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/myform');
        } else {
            $this->load->view('formsuccess');
        }
    }

}

?>
