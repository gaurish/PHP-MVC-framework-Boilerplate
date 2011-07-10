<?php

class Controller {
    public $load;
    public $model;
    
    function __construct(){
        $this->load = new Load();
        $this->model = new Model()
    }
    
    function home() {
      $this->load->view('index.php');
   }
}
