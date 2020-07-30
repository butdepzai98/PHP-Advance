<?php

class Girl
{    
    public $name;
    public $skin;
    public $eyes;
    public $mouth;
    public $hair;

    public function Smile()
    {
        $this->mouth = 'Em Nhe răng';
        $this->eyes = 'Mắt Em sáng';
        $this->skin = 'Da Em hồng hào';

        echo 'Khi em cười, '.$this->mouth. ', '.$this->eyes.', '.$this->skin;
    }

    public function Eat($speed)
    {
        echo 'Khi ăn, em ăn với tốc độ '.$speed;
    }
}

$nhan = new Girl();
$nhan->name = 'Thu Hà';

echo 'Tên em là : '.$nhan->name;

echo '<br>';
echo '<br>';
$nhan->Smile();

echo '<br>';
echo '<br>';
$nhan->Eat('Ánh sáng ;)');
