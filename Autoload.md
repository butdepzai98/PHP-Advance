
# ----------------------------------Autoload---------------------------------------

Như đã được học từ trước thì các bạn cũng đã biết nếu muốn khởi tạo một class được khai báo trong một file khác thì chúng phải nhúng file đó vào trong file muốn khởi tạo thì mới có thể sử dụng được.

nhưng nếu như chúng ta khởi tạo nhiều class trong một files mà các class đó được khai báo từ các file khác nhau thì sẽ phải include rất nhiều file. Điều đó sẽ khiến cho code của chúng ta trở lên rất rối

=> để khắc phục được điều đó thì chúng sẽ sử dụng hàm __autoload()

