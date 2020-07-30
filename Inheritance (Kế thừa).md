# ----------------------------------Inheritance---------------------------------------
Sau khi kế thừa thì lớp có sẽ có những thuộc tính và phương thức ở lớp cha

# Cú pháp :
class classCon extends classCha {  

}  

# Gọi phương thức và thuộc tính của lớp Cha 
-   Gọi bên trong lớp con (Lúc khai báo lớp Con)
-   Gọi bên ngoài (Lúc khởi tạo lớp Con)


*  Bên trong lớp Con _ _ _ _ _ _ _ _ _ _
như khái niệm tính kế thừa, thì ta _coi như_ các thuộc tính và phương thức của lớp Cha đều là của nó nên có thể dùng

    $this->thuocTinh;
    $this->phuongThuc();

    - Tuy nhiên, để phân biệt hàm nào của Cha, hàm nào của Con ta dùng

    parent::phuongThuc();

*  Bên ngoài lớp _ _ _ _ _ _ _ _ _ _ _
cách gọi giống như cách gọi thuộc tính và phương thức thông thường

    $con = new Con();
    $con->thuocTinh;
    $con->phuongThuc();


# VD:
*   Động vật
    - Thuộc tính :
       + Mắt  
       + Mũi  
       + Chân
    - Phương thức :
        + Nhìn
        + Ngửi
        + Chạy

*   Trâu
    - Thuộc tính :
       + Mắt  
       + Mũi  
       + Chân
       + Sừng
    - Phương thức :
        + Nhìn
        + Ngửi
        + Chạy
        ++ Cày
        ++ Húc