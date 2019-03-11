<?php
namespace app\index\controller;

use think\Cookie;

class Index extends Base
{

    public function index()
    {
        // header('Location: /index.php/vod/show/page/1/id/1.html');
        // exit;
        // $param = mac_param_url();
        
        // 点击同意
        $agree = isset($_GET['agree']) ? 1 : 0;
        // 判断Cookie 是否有同意记录
        $agree18 = Cookie::get('agree18');
        if (empty($agree18) && empty($agree)) {
            return $this->fetch('index/18');
        }
        if ($agree === 1) {
            //30 天
            Cookie::set('agree18', '1', 60 * 60 * 24 * 14);
        }
        
        $this->assign('pageHome', true);
        
        return $this->fetch('index/index');
    }

    public function wap_index()
    {
        $param = mac_param_url();
        return $this->fetch('index/index');
    }
}
