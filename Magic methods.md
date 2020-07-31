# ---------------------------------- Magic methods ---------------------------------------
là các phương thức đặc biệt được tạo ra nhằm giải quyết các vấn đề về sự kiện trong chương trình (cụ thể là với class), và đối với PHP cũng thế.

1.  Ưu nhược điểm
-   Ưu điểm
    +   Giúp cho chúng ta tùy biến được các hành vi.
    +   Nó giúp cho chúng ta có thể khởi tạo một đối tượng theo cách mình muốn.

-   Nhược điểm : Một magic methods có tốc độ chậm hơn các phương thức bình thường.

2.  Các Magic methods

---------------------------------------- Hay dùng -----------------------------------------
#   __construct(): gọi khi khởi tạo đối tượng.

#   __destruct(): gọi khi hủy đối tượng.

#   __set(): gọi khi ta truyền dữ liệu cho một thuộc tính không được phép truy cập.

#   __get(): gọi khi ta đọc dữ liệu từ một thuộc tính không được phép truy cập.


----------------------------------------- Ít dùng -------------------------------------------

#   __isset(): được gọi khi gọi hàm isset() hoặc empty() trên một thuộc tính không được phép truy cập.

#   __unset(): được gọi khi hàm unset() được sử dụng trong một thuộc tính không được phép truy cập.

#   __call():được gọi khi ta gọi một phương thức không được phép truy cập trong phạm vi của một đối tượng.

#   __callstatic(): được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một phương thức tĩnh.

#   __toString(): phương thức này giúp class chỉ định xem sẽ in ra cái gì khi nó được dùng.

#   __invoke():phương thức này được gọi khi một lệnh cố gắng gọi một đối tượng như một hàm.

#   __sleep(): được gọi khi serialize() một đối tượng.

#   __wakeup: được gọi khi unserialize() đối tượng.

#   __set_state():

#   __clone(): được sử dụng khi chúng ta clone một object.

#   __debugInfo(): được gọi khi chúng ta sử dụng hàm vardump().