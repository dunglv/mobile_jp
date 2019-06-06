#### Prerequisite: 
> - OS: Window
> - XAMPP v3.2.2+ (download and install at [here](https://www.apachefriends.org/download.html)).
> - Composer v1.4.2+ (download and install at [here](https://getcomposer.org/download/)).
#### Steps by steps:

- Setting môi trường:
> - Tạo project mới trong thư mục `xampp/htdocs`.
> - Thêm ssl certify cho website: Mở file cấu hình `httpd-vhosts.conf` theo path `\xampp\apache\conf\extra\` và thêm config:
> ```sh
> <VirtualHost 192.168.1.243:3000>
>      DocumentRoot "path/to/project"
>      ServerName project_name
>      SSLEngine on
>      SSLCertificateFile "conf/ssl.crt/server.crt"
>      SSLCertificateKeyFile "conf/ssl.key/server.key"
>      <Directory "path/to/project">
>          Options All
>          AllowOverride All
>          Require all granted
>      </Directory>
>  </VirtualHost>
> ```
> *Với địa chỉ PC là `192.168.1.243` (share info qua IP public) và port `3000`.*

- Cài đặt package với composer:
```sh
$ composer install
```

- Run web với server PHP built in:

```sh
$ php -S localhost:3000
```

- Mở website trên trình duyệt với address: `https://192.168.1.243:3000`

#### Một số lưu ý:
> - Xem readme trong folder `/auth` và `/payment` để xem chi tiết. 
> - Hãy đảm bảo các URL BP site đã được setting để docomo get thông tin đặt hàng.
> - Hãy đảm bảo Realm URL map với Realm URl trên app xác thực docomo, đặc biệt là các ký tự cuối url, không thiếu cũng không được thừa.
> - Hãy đảm Redirect URL đã được setting trên docomo.
> - Gặp lỗi hãy tra mã lỗi với tài liệu tham khảo và resolve lỗi theo tài liệu.
> - *Download docs đầy đủ tại [đây](https://drive.google.com/open?id=15BcLKxwfbkgWrF3NUGS75IS9Ju2hDgl4)*