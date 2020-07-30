# ----------------------------------Constructor---------------------------------------
_hàm khởi tạo_ cũng là một hàm bình thường(có biến hoặc ko có biến) nhưng có điểm đặc biệt là 
    Nó luôn chạy đầu tiên khi ta Khởi tạo đối tượng
    Bình thường bạn cũng có thể gọi tới hàm khởi tạo được

1.  Khai báo
có 2 cách khai báo _hàm khởi tạo_
    - Khai báo trùng với tên Class
    - Khai báo với tên __construct

VD:
    function __construct() {  
        echo 'Lớp A được khởi tạo <br/>';  
    }  

2.  _hàm khởi tạo_ trong kế thừa
có 4 trường hợp xảy ra:
    - Nếu cả Class Cha và Class Con cùng có _hàm khởi tạo_ 
    thì chỉ chạy _hàm khởi tạo_ của Class Con




# ----------------------------------Desctructor---------------------------------------
_hàm hủy_ là hàm tự động gọi sau khi đối tượng bị hủy, nó thường được sử dụng để giải phóng bộ nhớ chương trình. Trong đối tượng hàm hủy có thể có hoặc không.

Tương tự như hàm khởi tạo trong kế thừa. 
    Nếu lớp Con có _hàm hủy_ thì được ưu tiên chạy, 
    Còn nếu lớp Con _không có hàm hủy_ thì sẽ chạy ở lớp Cha, còn 
    Nếu cả 2 đều không có thì sẽ không chạy hàm nào.


function __destruct() {  

    echo 'Lớp A bị hủy  <br/>';  

}  