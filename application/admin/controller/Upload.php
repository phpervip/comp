<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.aiyi.info All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@aiyi.info> <http://www.aiyi.info>
// +----------------------------------------------------------------------

namespace app\admin\controller;
use app\common\controller\Admin;

class Upload extends Admin {

	public function _empty() {
		$controller = controller('common/Upload');
		$action     = ACTION_NAME;
		return $controller->$action();
	}
}