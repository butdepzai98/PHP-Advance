# ---------------------------------- Static ---------------------------------------
1.  __static__ – Dịch ra là Tĩnh    ---------------------------

Nó mang tác dụng chính đối với sự quản lý về mặt bộ nhớ. 
    Cụ thể là, các thành viên _static_ sẽ thuộc về quản lý bộ nhớ của lớp, 
    chứ không thuộc về quản lý của thể hiện lớp

VD: 
    public class ToaDo {
        public static String thongTin;
        public int x;
        public int y;
    }

=>  Thuộc tính thongTin là _static_, và nó sẽ thuộc quyền quản lý của lớp ToaDo. 
    
    Các thuộc tính x, y là không _static_ , sẽ thuộc quyền quản lý của các thể hiện, hay các đối tượng được khai báo từ ToaDo.


2.  Khai báo    ---------------------------
VD:
    class ClassName  
    {  
        //khai báo thuộc tính tĩnh  

            public static $propertyName;  

        //Khai báo phương thức tĩnh  

            public static function methodName()  
            {  

            }  
    }  

3.  Cách gọi thành phần _static_ -----------------------

    class ClassName()
    {
        protected static $ten;

        public static function getName()
        {
            echo self::$ten;

            //hoặc
            echo static::$ten;

            //hoặc
            echo ClassName::$ten;
        }

         public function showAll()  
        {  
            //gọi phương thức tĩnh  
            return self::getName();  

            //hoặc
            echo static::getName();  

            //hoặc
            return ClassName::getName();  
        }  
    }

    //gọi thuộc tính tĩnh  
    ClassName::$ten;  

    //gọi phương thức tĩnh  
    ClassName::getName();  

    //hoặc  
    $connguoi = new ClassName();  
    $connguoi->getName();

#   Gọi trong Class_____
Để gọi phương thức và thuộc tính tĩnh trong class thì chúng ta có thể sử dụng 1 trong 3 cú pháp: 
    selft::$ten
    self::getName()

    ClassName::$name 
    ClassName::getName() 

    static::$ten
    static::getName()

#   Ngoài Class__________
Đối với thuộc tính tĩnh thì chúng ta không thể sử dụng cách truyền thống để gọi được nữa mà phải sử dụng cú pháp 

    ClassName::$tenthuoctinh
    ClassName::tenthuocphuongthuc()
