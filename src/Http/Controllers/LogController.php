<?php

namespace Sudo\Log\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogController extends Controller
{

	function __construct() {
        // Sử dụng middleware để check phân quyền và set ngôn ngữ
        $this->middleware(function ($request, $next) {
            // Đặt lại ngôn ngữ nếu trên url có request setLanguage
            setLanguage($request->setLanguage);

            return $next($request);
        });
    }

    /**
     * View hiển thị nội dung lấy chung với giao diện
     * Url = /admin/logs/view
     */
	public function view() {
		return view('Log::view');
	}

}