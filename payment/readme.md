#### 1. Cấu hình môi trường dev:
- Phương thức http: https
- Config domain không chứa ký tự đặc biệt và theo chuẩn tại [đây](https://jp.globalsign.com/blog/articles/server_name_indication.html). Domain không hợp lệ https://localhost:3000, https://192.168.1.2:3000,... Domain hợp lệ https://docomo-demo.dev, https://luongvietdung.com,... Nếu dùng aws làm server thì hãy customize domain. Nguyên nhân là do ở POST từ docomo đến URL đã setting ở BP site thì mình dùng SNI để truyền tin SSL. Nếu không setting gì hết cho Endpoint của API Gateway thì sẽ trở thành Bad gateway do không đối ứng cho SNI, và sẽ kết nối thất bại. 
- Config IP public, cho phép docomo gọi đến server web.
- Config Realm trùng với Realm trên app docomo.

#### 2. Cấu hình server docomo:
- Config Realm trùng với Realm trên server web.
- Tham khảo cấu hình dưới đây:
![](https://slack-imgs.com/?c=1&url=http%3A%2F%2Ffiles.marinax.co.jp%2FScreenShot%25202019-04-23%252020.16.30.jpg)