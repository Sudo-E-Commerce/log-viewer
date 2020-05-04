## Hướng dẫn sử dụng Sudo LogViewer ##

**Giới thiệu:** Đây là package dùng để quản lý các Logs lấy từ `storage/logs` của SudoCms.

Mặc định package sẽ tạo ra giao diện quản lý cho toàn bộ Logs được đặt tại `/{admin_dir}/logs/view`, trong đó admin_dir là đường dẫn admin được đặt tại `config('app.admin_dir')`. Chỉ dev mới được truy cập trang này.

### Cài đặt để sử dụng ###

- Package cần phải có base `sudo/core` để có thể hoạt động không gây ra lỗi
- Để có thể sử dụng Package cần require theo lệnh `composer require sudo/logs`
- Để sử dụng thì cần phải set LOG_CHANNEL tại .ENV sang daily `LOG_CHANNEL=daily`
- Publish các file cần thiết sử dụng `php artisan vendor:publish --tag=sudo/log`

### Cấu hình tại Menu ###

	[
    	'type' 		=> 'single',
		'name' 		=> 'Quản lý Log',
		'icon' 		=> 'fas fa-bug',
		'route' 	=> 'admin.logs.view',
		'role'		=> 'logs_view'
	],
 
- Vị trí cấu hình được đặt tại `config/SudoMenu.php`
- Để có thể hiển thị tại menu, chúng ta có thể đặt đoạn cấu hình trên tại `config('SudoMenu.menu')`

### Publish ###

Mặc định khi chạy lệnh **php artisan sudo/core** đã sinh luôn cho package này, nhưng có một vài trường hợp chỉ muốn tạo lại riêng cho package này thì sẽ chạy các hàm dưới đây:

* Khởi tạo chung theo core
	- Tạo configs: `php artisan vendor:publish --tag=sudo/core`
	- Chỉ tạo configs: `php artisan vendor:publish --tag=sudo/core/config`
* Khởi tạo riêng theo package
	- Tạo configs: `php artisan vendor:publish --tag=sudo/log`
	- Chỉ tạo configs: `php artisan vendor:publish --tag=sudo/log/config`

### Sử dụng ###

Cấu hình đường dẫn tại `config('log-viewer.route.attributes.prefix')`

Cấu hình Middleware tại `config('log-viewer.route.attributes.middleware')` hoặc .ENV `SUDO_LOGVIEWER_MIDDLEWARE={middleware_string}`, trong đó middleware_string là chuỗi các middleware cách nhau bởi dấu phẩy ',' VD web,auth-admin