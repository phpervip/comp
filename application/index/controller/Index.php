<?php
// +----------------------------------------------------------------------
// | SentCMS [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.aiyi.info All rights reserved.
// +----------------------------------------------------------------------
// | Author: molong <molong@aiyi.info> <http://www.aiyi.info>
// +----------------------------------------------------------------------

namespace app\index\controller;
use app\common\controller\Fornt;

class Index extends Fornt {

	// 网站首页
	public function index() {
		//设置SEO
		$this->setSeo(config('web_site_title'), config('web_site_keyword'), config('web_site_description'));
		return $this->fetch();
	}

	// 关于我们
    public function about_us(){
        return $this->fetch();
    }

    // 联系我们
    public function contact_us(){
        return $this->fetch();
    }

}
