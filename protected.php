<?php

class Xe
{
    protected $tenXe;
}

class Suzuki extends Xe
{
    public function hienThongTin()
    {
        $this->tenXe = 'Z1000';
        echo 'Xe của bạn là :'. $this->tenXe;
    }
}

$su = new Suzuki();
$su->hienThongTin();