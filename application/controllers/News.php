<?php

class News extends CI_Controller {

    public function create($page = 'create') {
        $this->load->helper('form');
        $this->load->library(array('form_validation','calendar'));
        
        
        $data['title'] = 'Create a news item';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        } else {
            $this->load->model('news_model');
            $this->news_model->set_news();
            $this->load->view('news/success');
        }
        
    }

}

?>
