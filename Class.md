# ----------------------------------CLASS---------------------------------------

# 1. Class 
    -   Như ta đã biết, đối tượng là những sự vật có các tính chất, hành động giống nhau .
-> Class được ví như một mẩu mô tả trạng thái, hành động của đối tượng đó (Có nhiều người hiểu nhầm lớp chính là đối tượng).

# 2. Phương thức của lớp
    có 2 phương thức:
    - Phương thức KHAI BÁO
    - Phương thức KHỞI TẠO

//Khai báo

    class Animal
    {
        $eyes;
        $nose;
        $color;

        function run($r)
        {
            echo 'Run with speed : '.$r;
        }

        function sleep($s)
        {
            //$this trỏ tới thuộc tính của chính mình
            
            $this->eyes = 'Nhắm lại';
        }
    }

//Khởi tạo

    $dog = new Animal();

//Gán giá trị 
    $dog->eyes = 'Black eyes';
    echo $dog->eyes;

//Gọi hàm
    $dog->run('100km/h');








