#### 1. Cấu hình môi trường dev:
- Phương thức http: https
- Config IP public, cho phép docomo gọi đến server web.
- Config redirect_url mapping với url trên màn hình quản lý docomo.
- Config scope:
 + nếu get open_id: scope=open_id
 + nếu get suid: scope=open_id%20suid

#### 2. Cấu hình server docomo:
- Redirect url map với config trong website.
- Thêm IP public của server web trên màn hình quản lý docomo cho phép server web call đến server docomo.
- Cấu hình scope tương thích với scope trên website.
- Tham khảo cấu hình tại [đây](https://drive.google.com/file/d/1kRZ_SdQIb-rPQsm-yhVJdMNUtqi1kHwl/view?usp=sharing)