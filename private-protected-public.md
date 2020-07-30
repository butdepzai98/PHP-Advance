# -----------------------------private protected and public------------------------

#   1.Private
- Chỉ dành riêng cho nội bộ của Class. 
- Không thể truy cập từ bên ngoài hay kể cả Class con kế thừa

- Private thường được dùng với _Các thuộc tính dữ liệu_ nhằm bảo vệ chúng, tránh truy cập tự do từ bên ngoài

- Các thuộc tính này sẽ có Get và Set để gán và lấy dữ liệu.

#   2.Protected
-   Chỉ cho phép truy xuất trong Class đó và Class kế thừa
-   Thường được dùng cho những phương thức và thuộc tính có khả năng được Class Con ghi đè


#   3.Public
- Truy cập được từ trong Class Cha cho tới Class Con và cả đối tượng khởi tạo
- Có thể dùng 1 trong 2 cách
    public $bienSo
    var $bienSo


----------------------------------------------------------------------------------------------

- VD:
    Xe
    -   Thuộc tính:
        +   loại xe
        +   tên xe
    -   Phương thức:
        +   get xe
        +   set xe
        +   xóa xe

    Wave
    -   Thuộc tính:
        +   loại xe
        +   tên xe
    -   Phương thức:
        +   get xe
        +   set xe
        +   xóa xe
        +   hiển thị thông tin

