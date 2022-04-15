<?php

    class HomeController extends Controller {
        public function __construct(){
            parent::__construct();

        }

        public function loadMessage(){
            $this->model->loadMessageModel();
        }

        public function home(){
            $this->view->getView($this , "Home");
        }
        
    }

?>