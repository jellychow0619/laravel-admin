<?php

// +----------------------------------------------------------------------
// | date: 2015-07-12
// +----------------------------------------------------------------------
// | AppController.php: 前台应用控制器
// +----------------------------------------------------------------------
// | Author: yangyifan <yangyifanphp@gmail.com>
// +----------------------------------------------------------------------

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Home\BaseController;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AppController extends BaseController {

	/**
	 * 应用首页
	 *
	 * @return Response
     * @auther yangyifan <yangyifanphp@gmail.com>
	 */
	public function getIndex(){
        return view('home.app.index', [
			'title'         => '应用',
			'keywords'      => '应用',
			'description'   => '应用',
		]);
	}

}
