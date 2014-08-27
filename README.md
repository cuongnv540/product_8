<h1> Tạo cấu trúc front-back end trong Yii  </h1>

Mặc định yii framework cấu trúc thư mục project khi khởi tạo không được phân chia thành back-front end . <br />
Sample project này là ví dụ cho việc khởi tạo và config cho project có cấu trúc back-front . <br />
Các bước khởi tạo được tham khảo tại : <br />
http://www.yiiframework.com/wiki/63/organize-directories-for-applications-with-front-end-and-back-end-using-webapplicationend-behavior <br />
Khi đăng nhập vào bằng tài khoản admin/admin thì mặc định sẽ được chuyen vào protected/views/admin/site/index.php <br />
Còn tài khoản bình thường ví dụ demo/demo được chuyển tiếp vào <br />
protected/views/home/site/index.php  <br />