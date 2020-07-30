<?php

class Xe
{
    private $loaiXe;
    private $tenXe;

    /**
     * Get the value of loaiXe
     */ 
    public function getLoaiXe()
    {
        return $this->loaiXe;
    }

    /**
     * Set the value of loaiXe
     *
     * @return  self
     */ 
    public function setLoaiXe($loaiXe)
    {
        $this->loaiXe = $loaiXe;

        return $this;
    }

    /**
     * Get the value of tenXe
     */ 
    public function getTenXe()
    {
        return $this->tenXe;
    }

    /**
     * Set the value of tenXe
     *
     * @return  self
     */ 
    public function setTenXe($tenXe)
    {
        $this->tenXe = $tenXe;

        return $this;
    }


    private function xoaXe()
    {
        echo 'Xóa thành công';
    }
}

class Wave extends Xe
{
    public function hienThiThongTin($ten, $loai)
    {
        //Gọi hàm set để gán dữ liệu cho thuộc tính Private
        parent::setTenXe($ten);
        parent::setLoaiXe($loai);

        echo 'Xe của bạn là :'. $this->getTenXe() .', Loại xe: '. $this->getLoaiXe();
    }
}

$honda = new Wave();
$honda->hienThiThongTin('Wave RSX', 'Xe bất tử');