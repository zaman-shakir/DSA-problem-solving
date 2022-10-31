<?php


Class MyQueue{

    public function __construct()
    {
        $this->temp = [];
        $this->main = [];
    }
    public function enQueue($val){

        while(!empty($this->main)){

            array_push($this->temp, array_pop($this->main) );
        }
        array_push($this->main, $val);
        while(!empty($this->temp)){

            array_push($this->main, array_pop($this->temp) );
        }

    }
    public function deQueue(){
        if(empty($this->main)) return null;
        return array_pop($this->main);
    }

}

// $ob = new MyQueue();
// var_dump($ob->enQueue(5));
// var_dump($ob->enQueue(6));
// var_dump($ob->enQueue(7));
// var_dump($ob->enQueue(8));
// var_dump($ob->deQueue());
// var_dump($ob->main);








