<?php
    Class Node{

        private $data;
        private $next;

        public function __construct($data = null)
        {
            $this->data = $data;
            $this->next = null;
        }

        public function getData(){
            return $this->data;
        }

        public function getNext()
        {
          return $this->next;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function setNext($next){
            $this->$next = $next;
        }

    }



