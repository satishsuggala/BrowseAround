<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Shout extends CI_Controller {

    function Shout() {
        parent::__construct();
    }

    function index() {
        $data['title'] = 'ShoutOut / Home';
        $data['content'] = 'home';
        $this->load->view('index');
    }

}

?>