<?php

class Animal 
{
    public $mat = 'Long lanh';
    public $mui;
    public $chan;

    public function nhin()
    {
        echo 'Khi nhìn, đôi mắt nó '. $this->mat;
    }

    public function ngui()
    {
        # code...
    }

    public function chay()
    {
        # code...
    }
}

class Trau extends Animal
{
    public $sung;

    public function cay()
    {
        # code...
    }

    public function huc()
    {
        $this->chan = 'Chân lấy đà';
        
        echo '<br>';
        echo 'Khi chuẩn bị húc';
        echo '<br>';

        echo $this->chan;
        echo ', Húc 1 phát bay người luôn :)';
    }
}

$buffalo = new Trau();

$buffalo->mat = 'Đằng đằng sát khí';
$buffalo->nhin();
$buffalo->huc();