<?php
namespace app\index\controller;

use think\Cookie;

class Test extends Base
{

    public function index()
    {
        // header('Location: /index.php/vod/show/page/1/id/1.html');
        // exit;
        // $param = mac_param_url();
        

       // $this->assign('pageHome', true);
        
        return $this->fetch('test/index');
    }

}
