# Hướng dẫn sử dụng Sudo Log Viewer #

## Cài đặt để sử dụng ##
- Để sử dụng thì cần phải set LOG_CHANNEL tại .ENV sang daily

	LOG_CHANNEL=daily

## Cấu hình tại Menu ##

	[
    	'type' 		=> 'single',
		'name' 		=> 'Quản lý Log',
		'icon' 		=> 'fas fa-bug',
		'route' 	=> 'admin.logs.view',
		'role'		=> 'logs_view'
	],

## Cấu hình tại Module ##

## Publish ##
* Mặc định khi chạy lệnh **php artisan sudo/core** đã sinh luôn cho package này, nhưng có một vài trường hợp chỉ muốn tạo lại riêng cho package này thì sẽ chạy các hàm dưới đây:
* Khởi tạo chung theo core
	- Tạo configs

		php artisan vendor:publish --tag=sudo/core	

	- Chỉ tạo configs

		php artisan vendor:publish --tag=sudo/core/config

* Khởi tạo riêng theo package
	- Tạo configs

		php artisan vendor:publish --tag=sudo/log	

	- Chỉ tạo configs

		php artisan vendor:publish --tag=sudo/log/config

* Lưu ý: Nếu muốn ghi đè lên các file config hiện tại thì sử dụng thêm tag "--force" (Chỉ config mới dùng), các file assets sẽ mặc định ghi đè

## Sử dụng ##

- Cấu hình Prefix tại config('log-viewer.route.attributes.prefix')

- Cấu hình Middleare tại config('log-viewer.route.attributes.middleware')