# ----------------------------------Encapsulation---------------------------------------
Ta có thể hiểu nôm la tính đóng gói là không cho bên ngoài biết được bên trong đối tượng có những gì hay được cài đặt như thế nào. Nếu muốn thay đổi bên trong đối tượng thì phải được sự chấp nhận của đối tượng đó thông qua ba mức độ truy cập private protected và public mà chúng ta đã học ở bài trước.

Ví dụ trong đối tượng kế toán có một chức năng tính lương, chức năng này có những phép tính mà các đối tượng khác không hề biết cách tính nó như thế nào. Đối tượng kế toán sẽ có những chức năng dành cho các hàm kế thừa nó có thể truy xuất vào và thông qua ba mức độ truy cập để giới hạn chúng. Đây cũng chính là bảo mật thông tin cho đối tượng.

