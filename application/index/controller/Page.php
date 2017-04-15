<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 17/4/16
 * Time: 上午12:24
 */

namespace app\index\controller;
use app\Common\Controller\Fornt;

class Page extends Fornt
{
    public function detail(){
        $teamplate = 'content/page/detail';
        return $this->fetch($teamplate);
    }
}